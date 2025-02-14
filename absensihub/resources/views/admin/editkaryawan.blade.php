<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun Karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Edit Akun Karyawan
        </div>
        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <form method="POST" action="{{ route('updateAkun', $karyawan->id_karyawan) }}">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama Pegawai</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $karyawan->nama }}" required>
                </div>
                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-bold mb-2">Kelamin</label>
                    <select id="gender" name="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="L" {{ $karyawan->kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $karyawan->kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Alamat</label>
                    <textarea id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $karyawan->alamat }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-gray-700 font-bold mb-2">Jabatan</label>
                    <select id="position" name="position" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="karyawan">Karyawan</option>
                        <option value="keuangan">Keuangan</option>
                        <option value="sdm">SDM</option>
                        <option value="it">It</option>
                        <option value="CEOx`">CEO</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $karyawan->username }}" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password (Biarkan kosong jika tidak ingin mengubah)</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                    <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="aktif" {{ $karyawan->status_akun == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="pending" {{ $karyawan->status_akun == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>  
                <div class="flex justify-end">
                    <a href="{{ route('akunkaryawan1') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">
                        Batal
                    </a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
