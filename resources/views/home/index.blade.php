<x-layout>
    {{-- Sejarah --}}
    <div class="flex flex-col items-center justify-center px-6 mx-auto max-w-7xl md:flex-row md:items-center md:space-x-8 lg:px-12 ">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-56 transition-shadow duration-300 hover:shadow-emas rounded-xl hover:shadow-md md:w-1/2 md:h-72 lg:h-96"
        >
    
        <div class="flex flex-col items-center justify-center md:w-1/2 lg:items-start">
            <h1 class="mt-4 text-3xl font-bold text-center transition-colors duration-300 sm:mt-0 md:text-2xl lg:text-4xl hover:text-emas">Tari Baris Gede Télék</h1>
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
                        <div class="p-6 text-center transition-shadow bg-white/5 md:p-8 rounded-xl hover:shadow-sm hover:shadow-emas group">
                            <!-- Teks dengan tinggi tetap -->
                            <a href="/informasi/{{$data->id}}" class="group">

                                <p class="h-16 mb-4 overflow-hidden text-lg font-bold leading-tight text-white line-clamp-3 group-hover:text-emas">
                                    {{$data->judul}}
                                </p>
                            </a>
                            <div class="relative overflow-hidden border rounded-md aspect-square border-white/5">
                                <img 
                                    src="{{asset('galeri/' . $data->foto)}}" 
                                    alt="{{$data->judul}}" 
                                    class="object-cover w-full h-full transition-all duration-300 transform "
                                >
                            </div>
                            <p class="mt-4 text-xs text-right text-white md:text-sm">{{$data->created_at->format('d - M - Y')}}</p>
                        </div>
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
    
        <div class="flex flex-col items-center justify-center md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36 ">
            <img 
                src="{{ Vite::asset('resources/images/penari.png') }}" 
                alt="Penari" 
                class="w-full max-w-xs transition-shadow duration-300 shadow-md hover:shadow-emas md:max-w-none md:w-64 lg:w-72 lg:mt-8"
            >
            <img 
                src="{{ Vite::asset('resources/images/petelek.png') }}" 
                alt="Petelek" 
                class="w-full max-w-xs transition-shadow duration-300 shadow-md md:max-w-none md:w-64 lg:w-72 lg:mt-8 hover:shadow-emas"
            >
        </div>
    </div>

    {{-- GALERI --}}
    <div class="mt-36">
        <x-page-heading>Galeri</x-page-heading>
    
        <div class="flex flex-col items-center">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                <!-- Gambar-gambar -->
                @foreach ($galeri as $data)
                <a href="/galeri/{{$data->id}}" class="relative overflow-hidden border rounded-lg aspect-square border-white/5">
                    <img src="{{asset('galeri/' . $data->foto)}}" alt="{{$data->deskripsi}}" width="300" height="300" class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-md hover:shadow-emas">

                </a>
                @endforeach
            </div>
    

            <div class="flex justify-center mt-6 col-span-full md:mt-8">
                <a href="/galeri" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:text-emas hover:bg-blue-700">
                    More
                </a>
                
            </div>
        
        </div>
    </div>
</x-layout>