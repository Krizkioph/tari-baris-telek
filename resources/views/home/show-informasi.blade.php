<x-layout>

    <img src="{{asset('galeri/'. $informasi->foto)}}" alt="">

    <div class="flex justify-between mt-4">
        <p>Di upload oleh : {{$informasi->user->name}}</p>
        <p>{{$informasi->created_at->format('d - M - Y')}}</p>
    </div>

    <div class="mt-8">
        <x-page-heading>{{$informasi->judul}}</x-page-heading>

        <p>{{$informasi->deskripsi}}</p>
    </div>

</x-layout>