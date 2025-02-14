<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body class="text-white bg-black font-hanken-grotest">

    <div class="flex flex-row ">

         <!-- Sidebar -->
         <aside class="flex flex-col w-64 min-h-screen bg-gray-600">
            <div class="p-4 border-b border-gray-500">
                <div class="flex items-center p-2 space-x-2 border border-black rounded-md">
                    <img src="{{Vite::asset('resources/images/logo-profile.png')}}" alt="User" class="w-8 h-8 rounded-full">
                    
                    @auth
                        <span class="text-xl font-bold hover:text-emas">{{Auth::user()->name}}</span>
                    @endauth
                </div>

                <!-- Log Out Button -->
                <div class="mt-3 ">
                    @auth    
                        <form method="POST" action="/logout" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button class="w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas ">Log Out</button>
                        </form>
                    @endauth
                </div>
            </div>
            <nav class="flex flex-col flex-grow p-4 space-y-2">
                <div class="space-y-2">

                    <div class="relative mb-4">
                        <a href="/dashboard" class="block w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">
                            Home
                        </a>                        
                    </div>
                    
                    <div class="relative">
                        <button class="w-full p-2 text-left transition bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown " data-target="info-dropdown">
                            Informasi
                        </button>
                        <div id="info-dropdown" class="mt-2 ml-2 space-y-2 dropdown-content">
                            <a href="/dashboard/tambah_informasi" class="block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas  {{ request()->routeIs('tambah_informasi') ? 'text-emas font-bold' : '' }}">Tambah Informasi</a>
                            <a href="/dashboard/view_informasi" class="block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas  {{ request()->routeIs('view_informasi') ? 'text-emas font-bold' : '' }}">View Informasi</a>
                        </div>
                    </div>
                
                    <div class="relative">
                        <button class="w-full p-2 text-left transition bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="galeri-dropdown">
                            Galeri
                        </button>
                        <div id="galeri-dropdown" class="mt-2 ml-2 space-y-2 dropdown-content">
                            <a href="/dashboard/tambah_galeri" class="{{ request()->routeIs('tambah_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded  hover:bg-gray-500 hover:text-emas">Tambah Galeri</a>
                            <a href="/dashboard/view_galeri" class=" {{ request()->routeIs('view_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Galeri</a>
                        </div>
                    </div>

                   
                </div>

                
                
            </nav>
        </aside>

        <main class="flex-1 mt-20 max-w-[1180px] ml-14 min-w-0 overflow-auto">
            {{ $slot }}
        </main>
    </div>


</body>
</html>