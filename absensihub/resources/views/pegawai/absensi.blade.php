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
            Absensi
        </div>
        <div class=" bg-white mt-4 mx-8 shadow-2xl grid grid-cols-1 p-9 rounded-xl">
            <div class="text-center text-2xl font-semibold" id="tanggalwaktu">

            </div >
            <div class="mx-auto">
                <form action="{{ route('absen') }}?id={{ $id_karyawan }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ request()->query('id') }}">
    
                    <div class="flex space-x-4 mt-4">
                        <input type="hidden" name="id" value="{{ request()->query('id') }}">
                        <button type="submit" name="status" value="masuk" class="bg-blue-500 text-white px-4 py-2 rounded">Masuk</button>
                        <button type="submit" name="status" value="sakit" class="bg-red-500 text-white px-4 py-2 rounded">Sakit</button>
                        <button type="submit" name="status" value="izin" class="bg-yellow-500 text-white px-4 py-2 rounded">Izin</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Status Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $record)
                        <tr>
                            <td class="px-6 py-3">{{ $record->tanggal }}</td>
                            <td class="px-6 py-3">{{ $record->status_kehadiran }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: '2-digit', 
                day: '2-digit', 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: false 
            };
            const formattedDateTime = now.toLocaleDateString('id-ID', options).replace(',', '');
            document.getElementById('tanggalwaktu').textContent = `Absensi tanggal : ${formattedDateTime}`;
        }

        setInterval(updateDateTime, 1000);

        updateDateTime();
    </script>
</body>

</html>
