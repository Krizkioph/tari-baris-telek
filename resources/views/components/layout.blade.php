<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/images/swastika.png" type="image/webp">
  <title>Tari Baris Télék</title>
  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>
<body class="min-h-screen pb-10 text-white bg-hitam font-hanken-grotesk">
  <div>
    <!-- Header Image -->
    <div class="relative hidden md:block">
      <img src="/images/header-image.webp" alt="Tari Baris Telek" class="w-full h-24 " />
    </div>
      

    <!-- Mobile Menu Button -->
    <div class="flex items-center justify-between px-4 py-3 border-b-2 md:hidden border-abu">
      <button id="mobile-menu-btn" class="transition-colors hover:text-emas">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <div class="flex items-center justify-center w-12 h-12">
        <a href="/login">
          <img src="/images/swastika.png" alt="Logo" class="object-contain w-full h-full border border-white" />
        </a>
      </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <!-- Menggunakan kelas Tailwind untuk transisi opacity dan pointer-events -->
    <div id="mobile-sidebar" class="fixed inset-0 z-50 transition-opacity duration-300 opacity-0 pointer-events-none bg-black/50 md:hidden">
      <!-- Sidebar content, akan di-slide dari kiri -->
      <div id="sidebar-content" class="w-64 h-full transition-transform duration-300 transform -translate-x-full bg-black">
        <div class="flex items-center justify-between p-4 border-b-2 border-abu">
          <span class="text-lg font-bold">Tari Baris Gede Télék</span>
          <button id="sidebar-close-btn" class="p-2 hover:text-emas">
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

    <nav class="hidden border-b-2 border-abu md:block">
      <div class="flex items-center justify-between py-4">
        <!-- Navigasi Tengah -->
        <div class="flex justify-center flex-1">
          <ul class="flex items-center justify-center space-x-10 text-md"> <!-- Tambahkan items-center di sini -->
            <li class="flex items-center h-8"> <!-- Tambahkan class height dan flex -->
              <a href="/login" class="flex items-center h-full">
                <img src="/images/swastika.png" alt="Logo Desa Sanur" 
                     class="transition-transform duration-300 h-9 hover:scale-110" />
              </a>
            </li>
            <li class="flex items-center h-9"><!-- Tambahkan class height dan flex -->
              <a href="/" class="hover:text-emas h-full flex items-center {{ request()->routeIs('home') ? 'text-emas font-bold' : '' }}">Beranda</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/sejarah" class="hover:text-emas h-full flex items-center {{ request()->routeIs('sejarah') ? 'text-emas font-bold' : '' }}">Sejarah</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/busana" class="hover:text-emas h-full flex items-center {{ request()->routeIs('busana') ? 'text-emas font-bold' : '' }}">Busana</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/gerakan" class="hover:text-emas h-full flex items-center {{ request()->routeIs('gerakan') ? 'text-emas font-bold' : '' }}">Gerakan</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/galeri" class="hover:text-emas h-full flex items-center {{ request()->routeIs('galeri') ? 'text-emas font-bold' : '' }}">Galeri</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/tentang" class="hover:text-emas h-full flex items-center {{ request()->routeIs(patterns: 'tentang') ? 'text-emas font-bold' : '' }}">Tentang</a>
            </li>
            <li class="flex items-center h-9">
              <a href="/lokasi" class="hover:text-emas h-full flex items-center {{ request()->routeIs('lokasi') ? 'text-emas font-bold' : '' }}">Lokasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main class="mt-8 md:mt-12 max-w-[986px] mx-auto flex-grow px-4 sm:px-6">
    {{ $slot }}
  </main>


  {{-- <footer class="block p-4 text-center border-t-2 mt-14 bg-hitam border-abu"> <!-- Tambahkan mt-auto -->
    <p>@copyright By asdas</p> 
  </footer> --}}
</body>
</html>
