<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Tailwind CSS</title>
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
                        Hai! Selamat datang di AbsensiHub. Yuk, absen atau ajukan cuti sekarang!
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white  grid place-items-center h-full">
            <div class="py-14 px-10">
                <div class="text-4xl font-bold mb-6">
                    Masuk
                </div>
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 ">Username</label>
                        <input type="text" name="username" id="username"
                            class="rounded-full border-[#d095e1] border-2 w-full block p-2 px-3"
                            placeholder="Masukan Username" required>
                    </div>
                    <div class="">
                        <label for="password" class="block mb-2 text-sm font-sm">Password</label>
                        <input type="password" name="password" id="password"
                            class="rounded-full border-[#d095e1] border-2 w-full block p-2 px-3" placeholder="********"
                            required>
                    </div>
                    <div>
                    </div>
                    <button type="submit" class="w-full bg-[#9e4ab8] text-white hover:bg-[#d095e1] rounded-3xl py-2 text-center font-bold text-xl">Sign In</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
