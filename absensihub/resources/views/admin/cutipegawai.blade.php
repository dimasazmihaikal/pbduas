<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Pengajuan Cuti
        </div>
        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <div class="">
                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                nama Pegawai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                jabatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cuti dari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sampai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuti as $c)
                        <tr class="bg-white border-b border-gray-200 hover:bg-gray-300">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $c->nama_karyawan }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $c->alasan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $c->tanggal_mulai }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $c->tanggal_selesai }}
                            </td>
                            <td class="px-6 py-4 text-green-700 uppercase">
                                {{ $c->status }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
