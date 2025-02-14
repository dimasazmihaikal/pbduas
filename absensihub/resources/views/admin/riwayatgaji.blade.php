<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Gaji Karyawan
        </div>

        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Karyawan</th>
                            <th scope="col" class="px-6 py-3">Jabatan</th>
                            <th scope="col" class="px-6 py-3">bulan</th>
                            <th scope="col" class="px-6 py-3">tahun</th>
                            <th scope="col" class="px-6 py-3">tunjangan</th>
                            <th scope="col" class="px-6 py-3">potongan</th>
                            <th scope="col" class="px-6 py-3">total gaji</th>
                            <th scope="col" class="px-6 py-3">Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatGaji as $gaji)
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-300">
                                {{-- <td class="px-6 py-4">{{ $gaji->id_gaji }}</td> --}}
                                <td class="px-6 py-4">{{ $gaji->nama }}</td>
                                <td class="px-6 py-4">{{ $gaji->jabatan }}</td>
                                <td class="px-6 py-4">{{ $gaji->bulan }}</td>
                                <td class="px-6 py-4">{{ $gaji->tahun }}</td>
                                <td class="px-6 py-4">{{ $gaji->tunjangan }}</td>
                                <td class="px-6 py-4">{{ $gaji->potongan }}</td>
                                <td class="px-6 py-4">{{ $gaji->jumlah_gaji }}</td>
                                <td class="px-6 py-4">{{ $gaji->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
