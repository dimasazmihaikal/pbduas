<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun Karyawan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase mx-8">
            Akun Karyawan
            @if (session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
            @endif

            @if (session('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
            @endif

            @if ($errors->any())
                <script>
                    alert("{{ $errors->first() }}");
                </script>
            @endif
        </div>

        <div class="grid grid-cols-4 grid-rows-2 gap-4 mt-10 mx-8">
            <div class="rounded-xl w-full bg-[#00beee] text-white row-span-2">
                <div class="grid grid-cols-2 gap-0 shadow-2xl h-44">
                    <div class="text-3xl font-bold mt-10 ml-3">
                        {{ $jumlahKaryawan }}
                    </div>
                    <div class="row-span-2 h-32 flex items-center justify-center">
                        <svg class="w-32 h-32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-3 -mt-8 font-medium">
                        Jumlah Karyawan
                    </div>
                </div>
            </div>
            <div class="col-span-3"></div>
            <button id="tambahakun" class="bg-green-500 hover:bg-green-700 rounded-xl text-white font-semibold text-xl">
                Tambah Akun
            </button>
        </div>

        <div class="mt-10 mx-8 bg-white p-3 shadow-xl">
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Pegawai</th>
                            <th scope="col" class="px-6 py-3">Jabatan</th>
                            <th scope="col" class="px-6 py-3">Username</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $k)
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-300">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $k->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $k->jabatan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $k->username }}
                                </td>
                                <td class="px-6 py-4 text-green-700 uppercase">
                                    {{ $k->status_akun }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="grid grid-cols-2 gap-1 text-center">
                                        <a href="{{ route('editAkun', $k->id_karyawan) }}"
                                            class="font-medium text-blue-600">Edit</a>
                                        <form action="{{ route('hapusAkun', $k->id_karyawan) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="font-medium text-red-600">Hapus</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-4">Tambah Akun</h2>
            <form id="addAccountForm" method="POST" action="{{ route('tambahAkun') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama Pegawai</label>
                    <input type="text" id="name" name="name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-bold mb-2">Kelamin</label>
                    <select id="gender" name="gender"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Alamat</label>
                    <textarea id="address" name="address"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-gray-700 font-bold mb-2">Jabatan</label>
                    <select id="position" name="position"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option value="karyawan">Karyawan</option>
                        <option value="keuangan">Keuangan</option>
                        <option value="sdm">SDM</option>
                        <option value="it">It</option>
                        <option value="CEO">CEO</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                    <input type="text" id="username" name="username"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password (minimal 6
                        karakter)</label>
                    <input type="password" id="password" name="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                    <select id="status" name="status"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option value="aktif">Aktif</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closePopup"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">
                        Batal
                    </button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('tambahakun').addEventListener('click', function() {
            document.getElementById('popup').classList.remove('hidden');
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').classList.add('hidden');
        });
    </script>
</body>

</html>
