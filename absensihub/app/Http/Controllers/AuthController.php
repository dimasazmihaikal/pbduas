<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');

        $user = DB::table('karyawan')->where('username', $username)->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Session::put('user_id', $user->id_karyawan);
            Session::put('jabatan', $user->jabatan);

            if ($user->jabatan === 'admin') {
                return redirect()->route('dashboardadmin', ['id' => $user->id_karyawan]);
            } else {
                return redirect()->route('absensi', ['id' => $user->id_karyawan]);
            }
        } else {
            return back()->withErrors(['username' => 'Kredensial tidak valid']);
        }
    }

    public function dashboardAdmin()
    {
        $jumlahKaryawan = DB::select('SELECT COUNT(*) as total FROM karyawan WHERE jabatan != "admin"')[0]->total;

        $jumlahHadir = DB::select('SELECT COUNT(*) as total FROM absensi WHERE status_kehadiran = "masuk"')[0]->total;

        $jumlahTidakHadir = DB::select('SELECT COUNT(*) as total FROM absensi WHERE status_kehadiran = "tidak hadir"')[0]->total;

        $jumlahCuti = DB::select('SELECT COUNT(*) as total FROM cuti WHERE status = "disetujui"')[0]->total;

        $kehadiranPerBulan = DB::select('
        SELECT MONTH(tanggal) as bulan, COUNT(*) as total 
        FROM absensi
        GROUP BY MONTH(tanggal)
        ');


        $dataKehadiran = array_fill(0, 12, 0);
        foreach ($kehadiranPerBulan as $data) {
            $dataKehadiran[$data->bulan - 1] = $data->total;
        }
        return view('admin.dashboardadmin', compact('jumlahKaryawan', 'jumlahHadir', 'jumlahTidakHadir', 'jumlahCuti', 'dataKehadiran'));
    }

    public function logout(Request $request)
    {
        Session::flush();

        return redirect()->route('login')->with('message', 'Anda telah logout.');
    }

    public function akunkaryawan()
    {
        $jumlahKaryawan = DB::select('SELECT COUNT(*) as total FROM karyawan WHERE jabatan != ?', ['admin']);
        $jumlahKaryawan = $jumlahKaryawan[0]->total;

        $karyawan = DB::select('SELECT * FROM karyawan WHERE jabatan != ?', ['admin']);

        return view('admin.akunkaryawan', [
            'jumlahKaryawan' => $jumlahKaryawan,
            'karyawan' => $karyawan,
        ]);
    }

    public function tambahAkun(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|string',
            'address' => 'required|string',
            'position' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:karyawan,username',
            'password' => 'required|string|min:6',
            'status' => 'required|string',
        ]);

        $hashedPassword = bcrypt($request->input('password'));

        try {
            DB::insert('INSERT INTO karyawan (nama, jabatan, username, password, status_akun, kelamin, alamat) VALUES (?, ?, ?, ?, ?, ?, ?)', [
                $request->input('name'),
                $request->input('position'),
                $request->input('username'),
                $hashedPassword,
                $request->input('status'),
                $request->input('gender'),
                $request->input('address'),
            ]);
            return redirect()->back()->with('message', 'Akun berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Akun gagal dibuat: ' . $e->getMessage());
        }
    }

    public function hapusAkun($id)
    {
        DB::delete('DELETE FROM karyawan WHERE id_karyawan = ?', [$id]);

        return redirect()->route('akunkaryawan1')->with('message', 'Akun berhasil dihapus.');
    }

    public function editAkun($id)
    {
        $karyawan = DB::select('SELECT * FROM karyawan WHERE id_karyawan = ?', [$id]);

        if (empty($karyawan)) {
            return redirect()->route('akunkaryawan1')->with('error', 'Karyawan tidak ditemukan.');
        }

        $karyawan = $karyawan[0];

        return view('admin.editkaryawan', [
            'karyawan' => $karyawan,
        ]);
    }

    public function updateAkun(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|string',
            'address' => 'required|string',
            'position' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:karyawan,username,' . $id . ',id_karyawan',
            'status' => 'required|string',
        ]);

        $hashedPassword = $request->input('password') ? bcrypt($request->input('password')) : null;

        if ($hashedPassword) {
            DB::update('UPDATE karyawan SET nama = ?, jabatan = ?, username = ?, password = ?, status_akun = ?, kelamin = ?, alamat = ? WHERE id_karyawan = ?', [
                $request->input('name'),
                $request->input('position'),
                $request->input('username'),
                $hashedPassword,
                $request->input('status'),
                $request->input('gender'),
                $request->input('address'),
                $id,
            ]);
        } else {
            DB::update('UPDATE karyawan SET nama = ?, jabatan = ?, username = ?, status_akun = ?, kelamin = ?, alamat = ? WHERE id_karyawan = ?', [
                $request->input('name'),
                $request->input('position'),
                $request->input('username'),
                $request->input('status'),
                $request->input('gender'),
                $request->input('address'),
                $id,
            ]);
        }

        return redirect()->route('akunkaryawan1')->with('message', 'Akun berhasil diperbarui.');
    }


    public function pengajuanCuti()
    {
        $cuti = DB::select('
            SELECT cuti.*, karyawan.nama AS nama_karyawan 
            FROM cuti
            JOIN karyawan ON cuti.id_karyawan = karyawan.id_karyawan
            WHERE cuti.status = "pending"
        ');

        return view('admin.pengajuancuti', [
            'cuti' => $cuti,
        ]);
    }


    public function approveCuti($id)
    {
        DB::update('UPDATE cuti SET status = ? WHERE id_cuti = ?', ['disetujui', $id]);
        return redirect()->back()->with('message', 'Cuti berhasil disetujui.');
    }

    public function rejectCuti($id)
    {
        DB::update('UPDATE cuti SET status = ? WHERE id_cuti = ?', ['ditolak', $id]);
        return redirect()->back()->with('message', 'Cuti berhasil ditolak.');
    }


    public function cutipegawai()
    {
        $cuti = DB::select('
            SELECT cuti.*, karyawan.nama AS nama_karyawan 
            FROM cuti
            JOIN karyawan ON cuti.id_karyawan = karyawan.id_karyawan
            WHERE cuti.status = "ditolak" OR cuti.status = "disetujui"
        ');

        return view('admin.cutipegawai', [
            'cuti' => $cuti,
        ]);
    }



    public function gajikaryawan()
    {
        $bulan = date('m');
        $tahun = date('Y');

        $gaji = DB::select('
            SELECT karyawan.id_karyawan, karyawan.nama, karyawan.jabatan, 
                   IFNULL(SUM(absensi.status_kehadiran = "hadir"), 0) AS hadir, 
                   IFNULL(SUM(absensi.status_kehadiran = "tidak hadir"), 0) AS tidak_hadir
            FROM karyawan
            LEFT JOIN absensi ON karyawan.id_karyawan = absensi.id_karyawan AND absensi.bulan = ? AND absensi.tahun = ?
            WHERE karyawan.jabatan != "admin"
            GROUP BY karyawan.id_karyawan, karyawan.nama, karyawan.jabatan
        ', [$bulan, $tahun]);

        $gajiPerJabatan = [
            'ceo' => 15000000,
            'it' => 8000000,
            'karyawan' => 7500000,
            'sdm' => 7750000,
            'keuangan' => 8000000,
        ];

        foreach ($gaji as &$karyawanGaji) {
            $gajiPokok = $gajiPerJabatan[$karyawanGaji->jabatan] ?? 0;
            $tunjangan = $gajiPokok * 0.10;
            $potongan = $karyawanGaji->tidak_hadir * ($gajiPokok * 0.04 / 30);
            $totalGaji = $gajiPokok + $tunjangan - $potongan;

            $karyawanGaji->gaji_pokok = $gajiPokok;
            $karyawanGaji->tunjangan = $tunjangan;
            $karyawanGaji->potongan = $potongan;
            $karyawanGaji->total_gaji = $totalGaji;
        }

        return view('admin.gajikaryawan', [
            'gaji' => $gaji,
        ]);
    }

    public function bayarGaji($id_karyawan)
    {
        $bulan = date('m');
        $tahun = date('Y');

        $gajiSudahDibayar = DB::select('
            SELECT COUNT(*) as total 
            FROM gaji 
            WHERE id_karyawan = ? AND bulan = ? AND tahun = ?
        ', [$id_karyawan, $bulan, $tahun]);

        if ($gajiSudahDibayar[0]->total > 0) {
            return redirect()->back()->with('error', 'Gaji untuk bulan ini sudah dibayar.');
        }
        $karyawan = DB::select('
            SELECT 
                karyawan.id_karyawan, 
                karyawan.nama, 
                karyawan.jabatan, 
                IFNULL(SUM(absensi.status_kehadiran = "hadir"), 0) AS hadir, 
                IFNULL(SUM(absensi.status_kehadiran = "tidak hadir"), 0) AS tidak_hadir 
            FROM 
                karyawan 
            LEFT JOIN 
                absensi ON karyawan.id_karyawan = absensi.id_karyawan 
                AND absensi.bulan = ? 
                AND absensi.tahun = ? 
            WHERE 
                karyawan.id_karyawan = ? 
            GROUP BY 
                karyawan.id_karyawan, karyawan.nama, karyawan.jabatan
        ', [$bulan, $tahun, $id_karyawan]);

        if (empty($karyawan)) {
            return redirect()->back()->with('error', 'Karyawan tidak ditemukan.');
        }

        $karyawan = $karyawan[0];
        $gajiPokok = 0;
        switch ($karyawan->jabatan) {
            case 'ceo':
                $gajiPokok = 15000000;
                break;
            case 'it':
                $gajiPokok = 8000000;
                break;
            case 'karyawan':
                $gajiPokok = 7500000;
                break;
            case 'sdm':
                $gajiPokok = 7750000;
                break;
            case 'keuangan':
                $gajiPokok = 8000000;
                break;
        }

        $tunjangan = $gajiPokok * 0.10;
        $potongan = ($karyawan->tidak_hadir > 0) ? ($gajiPokok * 0.04) : 0;

        $jumlahGaji = $gajiPokok + $tunjangan - $potongan;


        DB::insert('
            INSERT INTO gaji (id_karyawan, bulan, tahun, jumlah_gaji, tunjangan, potongan, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ', [
            $karyawan->id_karyawan,
            $bulan,
            $tahun,
            $jumlahGaji,
            $tunjangan,
            $potongan,
            'dibayar'
        ]);

        return redirect()->back()->with('message', 'Gaji berhasil dibayarkan untuk ' . $karyawan->nama);
    }

    public function riwayatGaji()
    {
        $riwayatGaji = DB::select('
            SELECT 
                gaji.id_gaji, 
                karyawan.nama, 
                karyawan.jabatan, 
                gaji.bulan, 
                gaji.tahun, 
                gaji.tunjangan,
                gaji.potongan,
                gaji.jumlah_gaji, 
                gaji.status 
            FROM 
                gaji 
            JOIN 
                karyawan ON gaji.id_karyawan = karyawan.id_karyawan 
            WHERE 
                gaji.status = "dibayar"
        ');

        return view('admin.riwayatgaji', [
            'riwayatGaji' => $riwayatGaji,
        ]);
    }





    public function absen(Request $request)
    {
        $id_karyawan = $request->query('id');

        $waktuSekarang = Carbon::now('Asia/Jakarta');
        $jamAbsenMasuk = Carbon::createFromTime(8, 0, 0);
        $jamAbsenTutup = Carbon::createFromTime(16, 0, 0);

        if ($request->status === 'sakit') {
            $statusKehadiran = 'sakit';
        } elseif ($request->status === 'izin') {
            $statusKehadiran = 'izin';
        } elseif ($waktuSekarang <= $jamAbsenMasuk) {
            $statusKehadiran = 'masuk';
        } elseif ($waktuSekarang > $jamAbsenTutup) {
            $statusKehadiran = 'tidak hadir';
        } else {
            $statusKehadiran = 'telat';
        }

        DB::insert('INSERT INTO absensi (id_karyawan, tanggal, status_kehadiran, bulan, tahun) VALUES (?, ?, ?, ?, ?)', [
            $id_karyawan,
            $waktuSekarang,
            $statusKehadiran,
            $waktuSekarang->format('n'),
            $waktuSekarang->format('Y')
        ]);

        return redirect()->back()->with('message', 'absensi berhasil dilakukan');
    }


    public function absensi(Request $request)
    {
        $id_karyawan = $request->query('id');
        $history = DB::select('SELECT * FROM absensi WHERE id_karyawan = ?', [$id_karyawan]);

        return view('pegawai.absensi', compact('id_karyawan', 'history'));
    }





    public function cuti(Request $request)
    {
        $id_karyawan = $request->query('id');

        $pengajuanCuti = DB::select('SELECT * FROM cuti WHERE id_karyawan = ?', [$id_karyawan]);

        $historyCuti = DB::select('SELECT * FROM cuti WHERE id_karyawan = ? ORDER BY tanggal_mulai DESC', [$id_karyawan]);

        return view('pegawai.cuti', compact('pengajuanCuti', 'historyCuti', 'id_karyawan'));
    }


    public function tambahCuti(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'alasan' => 'required|string|max:255',
        ]);

        $id_karyawan = $request->query('id');

        DB::insert('
        INSERT INTO cuti (id_karyawan, tanggal_mulai, tanggal_selesai, alasan, status) 
        VALUES (?, ?, ?, ?, ?)
    ', [
            $id_karyawan,
            $request->input('tanggal_mulai'),
            $request->input('tanggal_selesai'),
            $request->input('alasan'),
            'pending'
        ]);

        return redirect()->back()->with('message', 'Pengajuan cuti berhasil diajukan.');
    }

    public function gaji()
    {
        $gajiKaryawan = DB::select('
        SELECT 
            gaji.id_gaji, 
            karyawan.nama, 
            karyawan.jabatan, 
            gaji.bulan, 
            gaji.tahun, 
            gaji.jumlah_gaji, 
            gaji.tunjangan, 
            gaji.potongan 
        FROM 
            gaji 
        JOIN 
            karyawan ON gaji.id_karyawan = karyawan.id_karyawan 
        WHERE 
            gaji.status = "dibayar"
    ');

        return view('pegawai.gaji', compact('gajiKaryawan'));
    }
}
