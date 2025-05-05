<x-layout>

    <!-- Container untuk iframe YouTube -->
    <div class="flex justify-center"
         data-aos="fade-up"
         data-aos-duration="800"
         data-aos-offset="150">
        <div class="w-full max-w-4xl overflow-hidden rounded-lg shadow-xl">
            <iframe 
                src="https://www.youtube.com/embed/exX3U_6zm38?si=b4NwTZjWR3tufC-n" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
                class="w-full h-48 sm:h-64 md:h-80 lg:h-96 xl:h-[500px] transition-all duration-300 border rounded-lg border-white/15 hover:border-emas"
            ></iframe>
        </div>
    </div>

    <!-- Galeri Section -->
    <div class="mt-36">
        <x-page-heading>GALERI</x-page-heading>
    
        <div class="flex flex-col items-center">
            <!-- Grid untuk galeri -->
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Gambar-gambar -->
                @foreach ($galeri as $data)
                    <a href="/foto/{{$data->id}}" 
                       class="relative block overflow-hidden border border-transparent rounded-lg duration-400 group hover:border-emas"
                       data-aos="zoom-in"
                       data-aos-duration="600"
                       data-aos-delay="{{ $loop->index * 100 }}">
                        <img 
                            src="{{ asset('photo/' . $data->foto) }}" 
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
            <div class="w-full max-w-6xl px-4 mt-10" id="pagination-container">
                <div class="flex justify-center">
                    {{ $galeri->links() }}
                </div>
            </div>
        </div>
    </div>
    
</x-layout>