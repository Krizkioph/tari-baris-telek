<x-layout>

    <!-- Container untuk iframe YouTube -->
    <div class="flex justify-center mt-10">
        <div class="w-full max-w-4xl overflow-hidden rounded-lg shadow-xl">
            <iframe 
                src="https://www.youtube.com/embed/VH_UaOkvOvA?si=Jbd_t9GoW7_pv2-S" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
                class="w-full h-64 border sm:h-96 border-white/15"
            ></iframe>
        </div>
    </div>

    <!-- Galeri Section -->
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
            <div class="mt-6">
                {{ $galeri->links() }}
            </div>
        </div>
    </div>

</x-layout>