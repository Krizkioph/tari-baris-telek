<x-layout>

    <x-page-heading>{{$galeri->deskripsi}}</x-page-heading>


    <div class="relative overflow-hidden transition-all duration-500 shadow-2xl group rounded-2xl hover:shadow-xl">
        <div class="absolute inset-0 z-10 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/40 to-transparent group-hover:opacity-100"></div>
        <img 
            src="{{asset('galeri/'. $galeri->foto)}}" 
            alt="{{$galeri->deskripsi}}" 
            class="w-full h-[650px] object-cover transform group-hover:scale-105 transition-transform duration-500"
        >
    </div>
   
</x-layout>