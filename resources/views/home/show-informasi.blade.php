<x-layout>
    <div class="max-w-5xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <!-- Image Section dengan Hover Effect -->
        <div class="relative overflow-hidden transition-all duration-500 shadow-2xl group rounded-2xl hover:shadow-xl">
            <div class="absolute inset-0 z-10 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/40 to-transparent group-hover:opacity-100"></div>
            <img 
                src="{{asset('galeri/'. $informasi->foto)}}" 
                alt="{{$informasi->judul}}" 
                class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-500"
            >
        </div>

        <!-- Metadata dengan Ikon -->
        <div class="flex flex-col items-start justify-between gap-3 mt-6 text-white/80 sm:flex-row sm:items-center">
            <div class="flex items-center space-x-2">
                <div class="p-2 bg-blue-100 rounded-full">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <p class="text-sm">Upload oleh <span class="font-semibold text-white/70">{{$informasi->admin->name}}</span></p>
            </div>
            
            <div class="flex items-center space-x-2">
                <div class="p-2 bg-blue-100 rounded-full">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <p class="text-sm">{{$informasi->created_at->format('d F Y')}}</p>
            </div>
        </div>

        <!-- Konten Artikel -->
        <article class="mt-10 prose prose-lg max-w-none">
            <!-- Judul dengan Gradient Text -->
            <h1 class="mb-8 text-4xl font-bold leading-tight text-transparent bg-gradient-to-r from-emas to-white bg-clip-text">
                {{$informasi->judul}}
            </h1>

            <!-- Deskripsi dengan Typography Enhanced -->
            <div class="space-y-6 font-serif text-lg leading-relaxed text-justify text-white/70">
                {!! nl2br(e($informasi->deskripsi)) !!}
            </div>
        </article>

        <!-- Garis Pembatas Dekoratif -->
        <div class="relative border-t-2 border-gray-200 border-dashed mt-14">
            <div class="absolute w-6 h-6 transform -translate-x-1/2 bg-white border-2 border-gray-300 border-dashed rounded-full -top-3 left-1/2"></div>
        </div>
    </div>
</x-layout>