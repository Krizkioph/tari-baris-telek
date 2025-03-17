<x-layout>
    <div class="p-1 mb-5">
        <x-button-kembali href="javascript:history.back()" >Kembali</x-button-kembali>
    </div>

    <x-page-heading>{{$galeri->deskripsi}}</x-page-heading>

    <div class="relative overflow-hidden transition-all duration-500 border border-transparent rounded-lg shadow-2xl group hover:shadow-xl hover:border-emas">

        <x-garis-pinggir/>

        <div class="absolute inset-0 z-10 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/40 to-transparent group-hover:opacity-100"></div>
        <img 
            src="{{asset('galeri/'. $galeri->foto)}}" 
            alt="{{$galeri->deskripsi}}" 
            class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[650px] object-contain transform group-hover:scale-105 transition-transform duration-500"
        >
    </div>

    <div class="flex flex-col items-start justify-between gap-3 mt-6 sm:flex-row sm:items-center">
        <div class="flex items-center space-x-2">
            <div class="p-2 bg-blue-100 rounded-full">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
            <p class="text-sm">Upload oleh <span class="font-semibold ">{{$galeri->admin->name}}</span></p>
        </div>
        
        <div class="flex items-center space-x-2">
            <div class="p-2 bg-blue-100 rounded-full">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <p class="text-sm">{{$galeri->created_at->format('d F Y')}}</p>
        </div>
    </div>
</x-layout>