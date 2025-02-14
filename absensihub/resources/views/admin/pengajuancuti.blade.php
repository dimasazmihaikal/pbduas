<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Cuti Karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Permohonan Cuti Karyawan
        </div>
        @if (session('message'))
            <div class="mt-4 mx-8 p-4 bg-green-200 text-green-800 rounded">
                {{ session('message') }}
            </div>
        @endif
        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Karyawan</th>
                        <th scope="col" class="px-6 py-3">alasan</th>
                        <th scope="col" class="px-6 py-3">Tanggal Mulai</th>
                        <th scope="col" class="px-6 py-3">Tanggal Selesai</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
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
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('approveCuti', $c->id_cuti) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="font-medium text-green-600">Terima</button>
                                </form>
                                <form action="{{ route('rejectCuti', $c->id_cuti) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="font-medium text-red-600">Tolak</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
