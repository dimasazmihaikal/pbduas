<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Cuti</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebarpegawai></x-sidebarpegawai>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Pengajuan Cuti
        </div>

        <form action="{{ route('cuti.tambah', ['id' => $id_karyawan]) }}" method="POST" class="mx-8 mt-4">
            @csrf
            <input type="hidden" name="id_karyawan" value="{{ $id_karyawan }}">
            <div class="mb-4">
                <label for="tanggal_mulai" class="block text-gray-700">Tanggal Mulai:</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="tanggal_selesai" class="block text-gray-700">Tanggal Selesai:</label>
                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="alasan" class="block text-gray-700">Alasan:</label>
                <textarea name="alasan" id="alasan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ajukan Cuti</button>
        </form>

        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tanggal Mulai</th>
                            <th scope="col" class="px-6 py-3">Tanggal Selesai</th>
                            <th scope="col" class="px-6 py-3">Status Cuti</th>
                            <th scope="col" class="px-6 py-3">Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historyCuti as $cuti)
                        <tr>
                            <td class="px-6 py-3">{{ $cuti->tanggal_mulai }}</td>
                            <td class="px-6 py-3">{{ $cuti->tanggal_selesai }}</td>
                            <td class="px-6 py-3">{{ $cuti->status }}</td>
                            <td class="px-6 py-3">{{ $cuti->alasan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
