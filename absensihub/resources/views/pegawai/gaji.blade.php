<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebarpegawai></x-sidebarpegawai>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Riwayat gaji
        </div>
        <div class=" bg-white mt-4 mx-8 shadow-2xl grid grid-cols-1 p-9 rounded-xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            bulan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            tahun
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tunjangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Potongan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gajiKaryawan as $gaji)
                    <tr>
                        {{-- <td class="border px-4 py-2">{{ $gaji->id_gaji }}</td> --}}
                        {{-- <td class="border px-4 py-2">{{ $gaji->nama }}</td> --}}
                        <td class="border px-4 py-2">{{ $gaji->jabatan }}</td>
                        <td class="border px-4 py-2">{{ $gaji->bulan }}</td>
                        <td class="border px-4 py-2">{{ $gaji->tahun }}</td>
                        <td class="border px-4 py-2">{{ $gaji->tunjangan }}</td>
                        <td class="border px-4 py-2">{{ $gaji->potongan }}</td>
                        <td class="border px-4 py-2">{{ $gaji->jumlah_gaji }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
