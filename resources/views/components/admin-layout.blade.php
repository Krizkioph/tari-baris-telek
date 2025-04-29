<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/images/swastika.png" type="image/webp">
  <title>Tari Baris Gede Télék</title>

  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>
<body class="text-white bg-hitam font-hanken-grotesk">


  <!-- Mobile Sidebar Overlay -->
  <div id="mobile-sidebar" class="fixed inset-0 z-50 transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 pointer-events-none">
    <div id="sidebar-content" class="w-64 h-full transition-transform duration-300 transform -translate-x-full bg-gray-600">
      <!-- Tombol close -->
      <div class="flex items-center justify-between p-3 border-b border-gray-500">
        <div class="flex items-center gap-x-4">
          <img 
            src="/images/swastika.png" 
            class="w-12"
            alt="Logo"
          >
          <div>
            <p class="text-2xl font-bold text-transparent bg-clip-text from-emas bg-gradient-to-r to-white ">TBGT</p>
          </div>
        </div>
        <button id="sidebar-close-btn" class="p-2 text-white hover:text-emas">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
      </div>
      
      <!-- Konten Sidebar -->
      <div class="p-4">
        
        <!-- Navigation -->
        <nav class="space-y-2">
          <a href="/dashboard" class="block p-2 text-lg bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Dashboard</a>
          
          <!-- Dropdown Informasi -->
          <div class="relative">
            <button class="flex items-center justify-between w-full p-2 text-lg text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="info-dropdown-mobile">
              <span>Informasi</span>
              <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </button>
            <div id="info-dropdown-mobile" class="ml-2 space-y-2 dropdown-content">
              <a href="/dashboard/tambah_informasi" class="block text-lg {{ request()->routeIs('tambah_informasi') ? 'text-emas font-bold' : '' }} p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">Tambah Informasi</a>
              <a href="/dashboard/view_informasi" class="block text-lg {{ request()->routeIs('view_informasi') ? 'text-emas font-bold' : '' }} p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Informasi</a>
            </div>
          </div>

          <!-- Dropdown Galeri -->
          <div class="relative">
            <button class="flex items-center justify-between w-full p-2 text-lg text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="galeri-dropdown-mobile">
              <span>Galeri</span>
              <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </button>
            <div id="galeri-dropdown-mobile" class="ml-2 space-y-2 dropdown-content">
              <a href="/dashboard/tambah_galeri" class="{{ request()->routeIs('tambah_galeri') ? 'text-emas font-bold' : '' }} block p-2 mt-2 bg-gray-700 rounded text-lg hover:bg-gray-500 hover:text-emas">Tambah Galeri</a>
              <a href="/dashboard/view_galeri" class=" {{ request()->routeIs('view_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 text-lg hover:text-emas">View Galeri</a>
            </div>
          </div>

          <!-- Dropdown Gerakan -->
          <div class="relative">
            <button class="flex items-center justify-between w-full p-2 text-lg text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="gerakan-dropdown-mobile">
              <span>Gerakan</span>
              <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </button>
            <div id="gerakan-dropdown-mobile" class="ml-2 space-y-2 dropdown-content">
              <a href="/dashboard/tambah_gerakan" class="hidden {{ request()->routeIs('tambah_gerakan') ? 'text-emas font-bold' : '' }} block p-2 mt-2 bg-gray-700 rounded text-lg hover:bg-gray-500 hover:text-emas">Tambah Gerakan</a>
              <a href="/dashboard/view_gerakan" class=" {{ request()->routeIs('view_gerakan') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 text-lg hover:text-emas">View Gerakan</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="flex">
    <!-- Desktop Sidebar (hanya tampil di md ke atas) -->
    <aside class="flex-col hidden w-64 min-h-screen bg-gray-600 md:flex">
      <nav class="flex flex-col flex-grow p-4 space-y-2">

        <div class="flex flex-col items-center gap-2 pb-4 mb-4 border-b border-gray-500">
          <div class="flex flex-col items-center gap-1">
            <div class="flex items-center gap-4">
              <img 
                src="/images/swastika.png" 
                class="w-20"
                alt="Logo"
              >
              <p class="text-2xl font-bold text-transparent bg-clip-text from-emas bg-gradient-to-r to-white">
                TBGT
              </p>
            </div>
            <p class="font-bold text-transparent bg-clip-text from-emas bg-gradient-to-r to-white text-md">
              Tari Baris Gede Télék
            </p>
          </div>
        </div>
        
        
    
        <a href="/dashboard" class="block p-2 text-left bg-gray-500 rounded hover:bg-gray-400 hover:text-emas">Dashboard</a>
        <div class="relative">
          <button class="flex items-center justify-between w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="info-dropdown">
            <span>Informasi</span>
            <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
          <div id="info-dropdown" class="ml-2 space-y-2 dropdown-content">
            <a href="/dashboard/tambah_informasi" class="block p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('tambah_informasi') ? 'text-emas font-bold' : '' }}">Tambah Informasi</a>
            <a href="/dashboard/view_informasi" class="block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('view_informasi') ? 'text-emas font-bold' : '' }}">View Informasi</a>
          </div>
        </div>
        
        <div class="relative">
          <button class="flex items-center justify-between w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="galeri-dropdown">
            <span>Galeri</span>
            <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
          <div id="galeri-dropdown" class="ml-2 space-y-2 dropdown-content">
            <a href="/dashboard/tambah_galeri" class="block p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('tambah_galeri') ? 'text-emas font-bold' : '' }}">Tambah Galeri</a>
            <a href="/dashboard/view_galeri" class="{{ request()->routeIs('view_galeri') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Galeri</a>
          </div>
        </div>

        <div class="relative">
          <button class="flex items-center justify-between w-full p-2 text-left bg-gray-500 rounded hover:bg-gray-400 toggle-dropdown" data-target="gerakan-dropdown">
            <span>Gerakan</span>
            <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
          <div id="gerakan-dropdown" class="ml-2 space-y-2 dropdown-content">
            <a href="/dashboard/tambah_gerakan" class="hidden p-2 mt-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas {{ request()->routeIs('tambah_gerakan') ? 'text-emas font-bold' : '' }}">Tambah Gerakan</a>
            <a href="/dashboard/view_gerakan" class="{{ request()->routeIs('view_gerakan') ? 'text-emas font-bold' : '' }} block p-2 bg-gray-700 rounded hover:bg-gray-500 hover:text-emas">View Gerakan</a>
          </div>
        </div>
      </nav>
    </aside>
  
    <!-- Main Container -->
    <div class="flex flex-col flex-1">
      <!-- Top Navbar -->
      <nav class="top-0 z-10 p-4 bg-gray-600 border-l-2 border-gray-700 shadow-md md:pr-8">
        <div class="flex justify-between md:justify-end">
          <button id="mobile-menu-btn" class="block text-white focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </button>
          <div class="relative">
            
            <button class="flex items-center space-x-2 focus:outline-none toggle-dropdown" data-target="user-menu">
              <img src="/images/logo-profile.png" alt="User" class="w-8 h-8 rounded-full">
              <span class="font-bold">@auth {{ Auth::user()->name }} @endauth</span>
              <svg class="w-4 h-4 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
              </svg>
            </button>

            <div id="user-menu" class="absolute right-0 w-48 mt-2 bg-gray-700 rounded shadow-lg dropdown-content">
              <a href="/profile" class="block px-4 py-2 hover:bg-gray-600">Profile</a>
              <form method="POST" action="/logout" class="w-full">
                @csrf
                @method('DELETE')
                <button type="submit" class="block w-full px-4 py-2 text-left hover:bg-gray-600">Logout</button>
              </form>
            </div>
            
          </div>
        </div>
      </nav>
  
      <!-- Main Content -->
      <main class="flex-1 mt-10 p-4 md:p-0 max-w-[1180px] ml-0 md:ml-14 lg:ml-14 min-w-0 overflow-auto">
        {{ $slot }}
      </main>
    </div>
  </div>

</body>
</html>
