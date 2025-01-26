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
        <img src="{{Vite::asset('resources/images/header-image.png')}}" alt="Tari Baris Telek" class="w-full h-20">
    </div>

    <nav class="text-white bg-black ">
        <ul class="flex justify-center py-4 space-x-8 text-xl">
            <li><a href="/" class="hover:text-gray-400">Beranda</a></li>
            <li><a href="/sejarah" class="hover:text-gray-400">Sejarah</a></li>
            <li><a href="/" class="hover:text-gray-400">Busana</a></li>
            <li><a href="/" class="hover:text-gray-400">Gerakan</a></li>
            <li><a href="/" class="hover:text-gray-400">Galeri</a></li>
            <li><a href="/" class="hover:text-gray-400">Tentang</a></li>
            <li><a href="/" class="hover:text-gray-400">Lokasi</a></li>
        </ul>
    </nav>


    <main>
        {{ $slot }}
    </main>
</body>
</html>