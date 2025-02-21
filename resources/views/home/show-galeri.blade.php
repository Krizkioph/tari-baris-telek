<x-layout>

    <x-page-heading>{{$galeri->deskripsi}}</x-page-heading>

    <img src="{{asset('galeri/'. $galeri->foto)}}" alt="">

   
</x-layout>