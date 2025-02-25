<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/png">
  <title>Tari Baris Télék</title>
  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>
<body class="pb-20 text-white bg-black font-hanken-grotest">
  <div>
    <!-- Header Image -->
    <div class="relative hidden md:block">
        <img src="{{ Vite::asset('resources/images/header-image.png') }}" alt="Tari Baris Telek" class="w-full h-24 " />
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo Desa Sanur" class="absolute h-20 transform -translate-y-1/2 left-44 top-1/2" />
      </div>
      

    <!-- Mobile Menu Button -->
    <div class="flex items-center justify-between px-4 py-3 border-b-2 md:hidden border-abu">
      <button id="mobile-menu-btn" class="text-white transition-colors hover:text-emas">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <div class="flex items-center">
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo Tari Baris Telek" class="object-contain w-12 h-12" />
        </a>
      </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <!-- Menggunakan kelas Tailwind untuk transisi opacity dan pointer-events -->
    <div id="mobile-sidebar" class="fixed inset-0 z-50 transition-opacity duration-300 opacity-0 pointer-events-none bg-black/50 md:hidden">
      <!-- Sidebar content, akan di-slide dari kiri -->
      <div id="sidebar-content" class="w-64 h-full transition-transform duration-300 transform -translate-x-full bg-black">
        <div class="flex items-center justify-between p-4 border-b-2 border-abu">
          <span class="text-lg font-bold">Tari Baris Telek</span>
          <button id="sidebar-close-btn" class="p-2 text-white hover:text-emas">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <nav class="p-4">
          <ul class="space-y-8 text-lg">
            <li><a href="/" class="block hover:text-emas {{ request()->routeIs('home') ? 'text-emas font-bold' : '' }}">Beranda</a></li>
            <li><a href="/sejarah" class="block hover:text-emas {{ request()->routeIs('sejarah') ? 'text-emas font-bold' : '' }}">Sejarah</a></li>
            <li><a href="/busana" class="block hover:text-emas {{ request()->routeIs('busana') ? 'text-emas font-bold' : '' }}">Busana</a></li>
            <li><a href="/gerakan" class="block hover:text-emas {{ request()->routeIs('gerakan') ? 'text-emas font-bold' : '' }}">Gerakan</a></li>
            <li><a href="/galeri" class="block hover:text-emas {{ request()->routeIs('galeri') ? 'text-emas font-bold' : '' }}">Galeri</a></li>
            <li><a href="/tentang" class="block hover:text-emas {{ request()->routeIs(patterns: 'tentang') ? 'text-emas font-bold' : '' }}">Tentang</a></li>
            <li><a href="/lokasi" class="block hover:text-emas {{ request()->routeIs('lokasi') ? 'text-emas font-bold' : '' }}">Lokasi</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <nav class="hidden text-white border-b-2 border-abu md:block">
      <div class="flex items-center justify-between py-4">
        <!-- Navigasi Tengah -->
        <div class="flex justify-center flex-1">
          <ul class="flex justify-center space-x-8 text-md">
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

  <main class="mt-10 md:mt-20 max-w-[986px] mx-auto">
    {{ $slot }}
  </main>

</body>
</html>
