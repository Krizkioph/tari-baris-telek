<x-layout>
    {{-- Sejarah --}}
    <div class="flex flex-col items-center justify-center px-6 mx-auto max-w-7xl md:flex-row md:items-center md:space-x-8 lg:px-12 ">
        <div class="w-full h-56 p-1 transition-all duration-300 border border-transparent hover:border-emas rounded-xl md:w-1/2 md:h-72 lg:h-96 hover:-translate-y-1"
        data-aos="fade-right"
        data-aos-offset="200"
        data-aos-delay="100">
            <iframe 
                src="https://www.youtube.com/embed/RHpWqcZ_wz0?si=b74R5E0LjRVdP2HS" 
                class="w-full h-full rounded-xl"
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        </div>      
    
        <div class="flex flex-col items-center justify-center md:w-1/2 lg:items-start"
             data-aos="fade-left"
             data-aos-delay="200"
             data-aos-offset="200">
            <h1 class="mt-4 text-3xl font-bold text-center text-transparent sm:mt-0 md:text-3xl lg:text-4xl bg-clip-text from-emas bg-gradient-to-r to-white">Tari Baris Gede Télék</h1>
            <p class="mt-4 leading-relaxed text-justify text-md md:text-base lg:text-lg">
                Tari Baris Gede Télék sebagai tarian sakral yang wajib dipentaskan ketika upacara piodalan Tilem Kajeng di Pura Dalem Kadewatan, disebut juga dengan I Kebo Dengkol sebagai identitas religius masyarakat Desa Adat Sanur dalam penganut agama Hindu (Siwaistik).
            </p>
        </div>
    </div>
    

    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>INFORMASI</x-page-heading>
        
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    
                    @foreach ($informasi as $data)
                    <x-informasi-card 
                        :data="$data" 
                        data-aos="fade-up" 
                        data-aos-delay="{{ $loop->index * 150 }}" 
                        data-aos-duration="700"
                        data-aos-easing="ease-out-cubic"/>
                    @endforeach
    
                    <!-- More Button -->
                    <div class="flex justify-center mt-6 col-span-full md:mt-8">
                        <x-button-standar href="/sejarah">More</x-button-standar>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BUSANA --}}
    <div class="mt-36">
        <x-page-heading>BUSANA</x-page-heading>
    
        <div class="flex flex-col items-center justify-center md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36">
            <div class="text-center" data-aos="zoom-in" data-aos-duration="800">
                <a href="/busana" target="_blank">
                    <div class="relative block w-full max-w-xs overflow-hidden transition-all duration-300 border rounded-lg group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15 hover:border-emas">
                        <img 
                            src="images/penari.png" 
                            alt="Penari" 
                            class="w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                            filter brightness-95 group-hover:brightness-100 
                            group-hover:scale-105 
                            group-hover:shadow-2xl 
                            group-hover:shadow-[rgba(255,215,0,0.2)]"
                        >
                        <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
                    </div>
                </a>
            </div>
    
            <!-- Container untuk Petelek -->
            <div class="text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                <a href="/busana" target="_blank ">
                    <div class="relative block w-full max-w-xs overflow-hidden transition-all duration-300 border rounded-lg group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15 hover:border-emas">
                        <img 
                            src="images/petelek.png" 
                            alt="Petelek" 
                            class="w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                                filter brightness-95 group-hover:brightness-100 
                                group-hover:scale-105 
                                group-hover:shadow-2xl 
                                group-hover:shadow-[rgba(255,215,0,0.2)]"
                        >
                        <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- GALERI --}}
    <div class="mt-36">
        <x-page-heading>GALERI</x-page-heading>
    
        <div class="flex flex-col items-center">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Gambar-gambar -->
                @foreach ($galeri as $data)
                    <a href="/galeri/{{$data->id}}" class="relative block overflow-hidden border border-transparent rounded-lg duration-400 group hover:border-emas"
                       data-aos="zoom-in"
                       data-aos-duration="600"
                       data-aos-delay="{{ $loop->index * 100 }}">
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
                <x-button-standar href="/galeri">More</x-button-standar>
            </div>
        </div>
    </div>
    
</x-layout>