<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat datang</title>
    @vite('resources/css/app.css')
    <style>
        .bg-custom {
            background-image: url('images/bg.jpg');
        }
    </style>
</head>

<body class="bg-gradient-to-tr  from-ungu to-pink">
    <div class="grid grid-cols-3 w-full h-screen p-28 px-56 ">
        <div class="bg-slate-400 col-span-2">
            <div class="h-full relative bg-custom bg-cover bg-center text-white ">
                <div class="h-full py-60 px-24">
                    <div>
                        Welcome to Website
                    </div>
                    <div class="text-6xl font-bold">
                        AbsensiHub
                    </div>
                    <div>
                        Hai! Selamat datang di AbsensiHub.
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white  grid grid-rows-3 h-full">
            <div>

            </div>
            <div class="mx-7 text-center font-semibold">
                ini adalah aplikasi yang yang dapat dimanfaatkan sebagai manajemen karyawan, absensi, pengajuan cuti, dan pencatatan gaji pegawai untuk memulai klik tombol dibawah
            </div>
            <div class="mx-auto">
                <a href="/login" class="bg-green-500 hover:bg-green-700 py-2 px-7 rounded-full">LANJUTKAN</a>
            </div>
            <div></div>
        </div>
    </div>
</body>

</html>
