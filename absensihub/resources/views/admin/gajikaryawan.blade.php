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
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if (session('message'))
            <div class="bg-green-500 text-white p-4 rounded">
                {{ session('message') }}
            </div>
        @endif
        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Karyawan</th>
                            <th scope="col" class="px-6 py-3">Jabatan</th>
                            <th scope="col" class="px-6 py-3">Gaji Pokok</th>
                            <th scope="col" class="px-6 py-3">Tunjangan</th>
                            <th scope="col" class="px-6 py-3">Potongan</th>
                            <th scope="col" class="px-6 py-3">Total Gaji</th>
                            <th scope="col" class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gaji as $k)
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-300">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $k->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $k->jabatan }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($k->gaji_pokok, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($k->tunjangan, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($k->potongan, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($k->total_gaji, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{ route('bayarGaji', $k->id_karyawan) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <button type="submit" class="font-medium text-green-600">Bayar</button>
                                    </form>
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
