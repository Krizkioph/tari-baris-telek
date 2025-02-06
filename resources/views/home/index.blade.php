<x-layout>
    {{-- Sejarah --}}
    <div class="flex flex-col items-center justify-center px-6 mx-auto max-w-7xl md:flex-row md:items-center md:space-x-8 lg:px-12 ">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-56 transition-shadow duration-300 shadow-lg rounded-xl hover:shadow-2xl md:w-1/2 md:h-72 lg:h-96"
        >
    
        <div class="flex flex-col items-center justify-center md:w-1/2 lg:items-start">
            <h1 class="mt-4 text-3xl font-bold text-center transition-colors duration-300 sm:mt-0 md:text-2xl lg:text-4xl hover:text-emas">Tari Baris Gede Telek</h1>
            <p class="mt-4 leading-relaxed text-justify text-md md:text-base lg:text-lg">
                Tari Baris Gede Télék berasal dari desa adat Sanur yang termasuk ke dalam bagian wilayah Kota Denpasar. Tari Baris Gede Télék adalah tarian sakral yang sering dipentaskan saat piodalan Tilem Kajeng atau setiap enam bulan kalender Bali di Pura Dalem Kedewatan.
            </p>
        </div>
    </div>
    

    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>Information</x-page-heading>
        
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    <!-- Card 1 -->
                    
                    <x-card-information/>
    
                    <!-- Card 2 & 3 (duplicate structure as needed) -->
                    <x-card-information/>
                    
                    <x-card-information/>
    
                    <!-- More Button -->
                    <div class="flex justify-center mt-6 col-span-full md:mt-8">
                        <a href="#" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:text-emas hover:bg-blue-700">
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
    
        <div class="flex flex-col items-center justify-center md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36 ">
            <img 
                src="{{ Vite::asset('resources/images/penari.png') }}" 
                alt="Penari" 
                class="w-full max-w-xs transition-shadow duration-300 md:max-w-none md:w-64 lg:w-72 lg:mt-8 shadow-[0_8px_20px_-5px_rgba(255,255,255,0.1)]"
            >
            <img 
                src="{{ Vite::asset('resources/images/petelek.png') }}" 
                alt="Petelek" 
                class="w-full max-w-xs transition-shadow duration-300 md:max-w-none md:w-64 lg:w-72 lg:mt-8 shadow-[0_8px_20px_-5px_rgba(255,255,255,0.1)]"
            >
        </div>
    </div>

    {{-- GALERI --}}
    <div class="mt-36">
        <x-page-heading>Galeri</x-page-heading>
    
        <div class="flex flex-col items-center">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                <!-- Gambar-gambar -->
                <img 
                    src="https://picsum.photos/300/300?random=1" 
                    alt="Dummy 1" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-sm hover:shadow-emas">
                <img 
                    src="https://picsum.photos/300/300?random=2" 
                    alt="Dummy 2" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=3" 
                    alt="Dummy 3" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=4" 
                    alt="Dummy 4" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=5" 
                    alt="Dummy 5" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                
            </div>
    

            <div class="flex justify-center mt-6 col-span-full md:mt-8">
                <a href="#" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:text-emas hover:bg-blue-700">
                    More
                </a>
                
            </div>
        
        </div>
    </div>
</x-layout>