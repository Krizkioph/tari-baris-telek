<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tari Baris Telek</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="pb-20 text-white bg-black font-hanken-grotest">

     <!-- Header Image -->
    <div>
        <img src="{{Vite::asset('resources/images/header-image.png')}}" alt="Tari Baris Telek" class="w-full h-24">
    </div>

    <nav class="text-white border-b-2 border-abu">
        <div class="flex items-center justify-between py-4">
            <!-- Navigasi Tengah -->
            <div class="flex justify-center flex-1">
                <ul class="flex justify-center space-x-8 text-m">
                    <li><a href="/" class="hover:text-gray-400">Beranda</a></li>
                    <li><a href="/sejarah" class="hover:text-gray-400">Sejarah</a></li>
                    <li><a href="/" class="hover:text-gray-400">Busana</a></li>
                    <li><a href="/" class="hover:text-gray-400">Gerakan</a></li>
                    <li><a href="/" class="hover:text-gray-400">Galeri</a></li>
                    <li><a href="/" class="hover:text-gray-400">Tentang</a></li>
                    <li><a href="/" class="hover:text-gray-400">Lokasi</a></li>
                </ul>
            </div>
    
            <!-- Tombol Log Out -->
            @auth    
            <form method="POST" action="/logout" class="mr-4">
                @csrf
                @method('DELETE')
                <button class="text-m hover:text-gray-400">Log Out</button>
            </form>
            @endauth
        </div>
    </nav>
    


    <main class="mt-20 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>
</html>