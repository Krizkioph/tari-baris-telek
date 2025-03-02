<x-layout>
    {{-- Sejarah --}}
    <div class="flex flex-col items-center justify-center px-6 mx-auto max-w-7xl md:flex-row md:items-center md:space-x-8 lg:px-12 ">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-56 transition-shadow duration-300 hover:shadow-emas rounded-xl hover:shadow-md md:w-1/2 md:h-72 lg:h-96"
        >
    
        <div class="flex flex-col items-center justify-center md:w-1/2 lg:items-start">
            <h1 class="mt-4 text-3xl font-bold text-center text-transparent transition-colors duration-300 sm:mt-0 md:text-2xl lg:text-4xl bg-clip-text from-emas bg-gradient-to-r to-white">Tari Baris Gede Télék</h1>
            <p class="mt-4 leading-relaxed text-justify text-md md:text-base lg:text-lg">
                Tari Baris Gede Télék berasal dari desa adat Sanur, wilayah yang terletak dalam Kota Denpasar, merupakan sebuah tarian sakral yang sarat akan makna. Tarian ini sering dipentaskan pada saat piodalan Tilem Kajeng, yang berlangsung setiap enam bulan dalam kalender Bali, di Pura Dalem Kedewatan.
            </p>
        </div>
    </div>
    

    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>Informasi</x-page-heading>
        
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    
                    @foreach ($informasi as $data)
                    <x-informasi-card :data="$data"/>
                    @endforeach
    
                    <!-- More Button -->
                    <div class="flex justify-center mt-6 col-span-full md:mt-8">
                        <a href="/sejarah" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:text-emas hover:bg-blue-700">
                            More
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BUSANA --}}
    <div class="mt-36">
        <x-page-heading>Busana</x-page-heading>
    
        <div class="flex flex-col items-center justify-center md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36">
            <div class="relative block w-full max-w-xs overflow-hidden border rounded-lg group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15">
                <a href="/busana" target="_blank">
                    <img 
                    src="{{ Vite::asset('resources/images/penari.png') }}" 
                    alt="Penari" 
                    class=" w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                    filter brightness-95 group-hover:brightness-100 
                    group-hover:scale-105 
                    group-hover:shadow-2xl 
                    group-hover:shadow-[rgba(255,215,0,0.2)]"
                    >
                    <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
                </a>
            </div>
            
            <div class="relative block w-full max-w-xs overflow-hidden border rounded-lg group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15">
                <a href="/busana" >
                    <img 
                        src="{{ Vite::asset('resources/images/petelek.png') }}" 
                        alt="Petelek" 
                        class="w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                            filter brightness-95 group-hover:brightness-100 
                            group-hover:scale-105 
                            group-hover:shadow-2xl 
                            group-hover:shadow-[rgba(255,215,0,0.2)]"
                    >
                    <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
                </a>
            </div>
        </div>
    </div>

    {{-- GALERI --}}
    <div class="mt-36">
        <x-page-heading>Galeri</x-page-heading>
    
        <div class="flex flex-col items-center">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Gambar-gambar -->
                @foreach ($galeri as $data)
                    <a href="/galeri/{{$data->id}}" class="relative block overflow-hidden rounded-lg group">
                        <img 
                            src="{{ asset('galeri/' . $data->foto) }}" 
                            alt="{{ $data->deskripsi }}" 
                            width="300" 
                            height="300" 
                            class="object-cover w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] rounded-lg aspect-square 
                                   transform group-hover:scale-105 
                                   group-hover:shadow-2xl
                                   group-hover:shadow-[rgba(255,215,0,0.2)]
                                   filter brightness-95 group-hover:brightness-100"
                        >
                        <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/40 to-transparent group-hover:opacity-100"></div>
                    </a>
                @endforeach
            </div>
    
            <!-- Pagination -->
            <div class="flex justify-center mt-6 col-span-full md:mt-8">
                <a href="/galeri" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:text-emas hover:bg-blue-700">
                    More
                </a>
                
            </div>
        </div>
    </div>
    
</x-layout>