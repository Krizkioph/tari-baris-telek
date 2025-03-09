<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/png" />
  <title>Tari Baris Gede Télék</title>

  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>
<body class="text-white bg-black font-hanken-grotest">

  <!-- Header Mobile (hanya tampil di mobile) -->
  <header class="flex items-center justify-between p-4 bg-gray-700 md:hidden">
    <button id="mobile-menu-btn" class="text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
    </button>
    @auth
        <form method="POST" action="/logout" class="w-auto">
            @csrf
            @method('DELETE')
            <button class="p-2 bg-gray-600 rounded hover:text-emas">
                Log Out
            </button>
        </form>
    @endauth
  </header>

  <!-- Mobile Sidebar Overlay -->
  <div id="mobile-sidebar" class="fixed inset-0 z-50 transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 pointer-events-none">
    <div id="sidebar-content" class="w-64 h-full transition-transform duration-300 transform -translate-x-full bg-gray-600">
      <!-- Tombol close -->


      <div class="flex items-center justify-between p-4 border-b border-gray-500">
        @auth
        <a href="/profile">
            <span class="text-xl font-bold hover:text-emas">{{ Auth::user()->name }}</span>
        </a>
        @endauth
        <button id="sidebar-close-btn" class="p-2 text-white hover:text-emas">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
      </div>
      
      <!-- Konten Sidebar -->
      <div class="p-4">
        <div class="items-center hidden p-2 space-x-2 border border-black rounded-md md:flex">
          <img src="{{Vite::asset('resources/images/logo-profile.png')}}" alt="User" class="w-8 h-8 rounded-full">
          @auth
            <span class="text-xl font-bold hover:text-emas">{{ Auth::user()->name }}</span>
          @endauth
        </div>


        <!-- Tombol Log Out -->
        <div class="hidden mb-4 md:block">
          @auth
            <form method="POST" action="/logout" class="w-full">
              @csrf
              @method('DELETE')
              <button class="w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Log Out</button>
            </form>
          @endauth
        </div>


        <!-- Navigation -->
        <nav class="space-y-2">
          <a href="/dashboard" class="block p-2 text-lg bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Home</a>
          <!-- Dropdown Informasi -->
          <div class="relative">
            <button class="w-full p-2 text-lg text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="info-dropdown-mobile">
              Informasi
            </button>
            <div id="info-dropdown-mobile" class="ml-2 space-y-2 dropdown-content">
              <a href="/dashboard/tambah_informasi" class="block text-lg {{ request()->routeIs('tambah_informasi') ? 'text-emas font-bold' : '' }} p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">Tambah Informasi</a>
              <a href="/dashboard/view_informasi" class="block text-lg {{ request()->routeIs('view_informasi') ? 'text-emas font-bold' : '' }} p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Informasi</a>
            </div>
          </div>

          <!-- Dropdown Galeri -->
          <div class="relative">
            <button class="w-full p-2 text-lg text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="galeri-dropdown-mobile">
              Galeri
            </button>
            <div id="galeri-dropdown-mobile" class="ml-2 space-y-2 dropdown-content">
              <a href="/dashboard/tambah_galeri" class="{{ request()->routeIs('tambah_galeri') ? 'text-emas font-bold' : '' }} block p-2 mt-2 bg-gray-700 rounded text-lg hover:bg-gray-500 hover:text-emas">Tambah Galeri</a>
              <a href="/dashboard/view_galeri" class=" {{ request()->routeIs('view_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 text-lg hover:text-emas">View Galeri</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="flex">
    <!-- Desktop Sidebar (hanya tampil di md ke atas) -->
    <aside class="flex-col hidden w-64 min-h-screen bg-gray-600 md:flex">
      <div class="p-4 border-b border-gray-500">
        <div class="flex items-center p-2 space-x-2 border border-black rounded-md">
          <img src="{{Vite::asset('resources/images/logo-profile.png')}}" alt="User" class="w-8 h-8 rounded-full">
          @auth
            <span class="text-xl font-bold hover:text-emas">{{ Auth::user()->name }}</span>
          @endauth
        </div>
        
        <div class="mt-3">
          @auth    
            <form method="POST" action="/logout" class="w-full">
              @csrf
              @method('DELETE')
              <button class="w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Log Out</button>
            </form>
          @endauth
        </div>
      </div>
      <nav class="flex flex-col flex-grow p-4 space-y-2">
        <a href="/dashboard" class="block p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Home</a>
        <div class="relative">
          <button class="w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="info-dropdown">
            Informasi
          </button>
          <div id="info-dropdown" class="ml-2 space-y-2 dropdown-content">
            <a href="/dashboard/tambah_informasi" class="block p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('tambah_informasi') ? 'text-emas font-bold' : '' }}">Tambah Informasi</a>
            <a href="/dashboard/view_informasi" class="block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('view_informasi') ? 'text-emas font-bold' : '' }}">View Informasi</a>
          </div>
        </div>
        <div class="relative">
          <button class="w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="galeri-dropdown">
            Galeri
          </button>
          <div id="galeri-dropdown" class="ml-2 space-y-2 dropdown-content">
            <a href="/dashboard/tambah_galeri" class="block p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('tambah_galeri') ? 'text-emas font-bold' : '' }}">Tambah Galeri</a>
            <a href="/dashboard/view_galeri" class="{{ request()->routeIs('view_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Galeri</a>
          </div>
        </div>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1  mt-10 p-4 md:p-0 max-w-[1180px] ml-0 md:ml-14 lg:ml-14 min-w-0 overflow-auto">
      {{ $slot }}
    </main>
  </div>

</body>
</html>
