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

    <div class="">

        <!-- Header Image -->
        <div>
            <img src="{{Vite::asset('resources/images/header-image.png')}}" alt="Tari Baris Telek" class="w-full h-20">
        </div>
        
        <nav class="text-white border-b-2 border-abu">
            <div class="flex items-center justify-between py-4">
                <!-- Navigasi Tengah -->
                <div class="flex justify-center flex-1">
                    <ul class="flex justify-center space-x-8 text-m">
                        <li><a href="/" class="hover:text-emas {{ request()->routeIs('home') ? 'text-emas font-bold' : '' }}">Beranda</a></li>
                    <li><a href="/sejarah" class="hover:text-emas {{ request()->routeIs('sejarah') ? 'text-emas font-bold' : '' }}">Sejarah</a></li>
                    <li><a href="/busana" class="hover:text-emas {{ request()->routeIs('busana') ? 'text-emas font-bold' : '' }}">Busana</a></li>
                    <li><a href="/gerakan" class="hover:text-emas {{ request()->routeIs('gerakan') ? 'text-emas font-bold' : '' }}">Gerakan</a></li>
                    <li><a href="/galeri" class="hover:text-emas {{ request()->routeIs('galeri') ? 'text-emas font-bold' : '' }}">Galeri</a></li>
                    <li><a href="/tentang" class="hover:text-emas {{ request()->routeIs(patterns: 'tentang') ? 'text-emas font-bold' : '' }}">Tentang</a></li>
                    <li><a href="/lokasi" class="hover:text-emas {{ request()->routeIs('lokasi') ? 'text-emas font-bold' : '' }}">Lokasi</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    
    </div>
    
    
    <main class="mt-20 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

</body>
</html>