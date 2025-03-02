@props(['data'])

<a href="/informasi/{{$data->id}}" class="group">
    <div class="p-6 text-center transition-all duration-300 border bg-white/5 border-white/15 md:p-8 rounded-xl hover:border-emas group">
        <p class="h-16 mb-4 overflow-hidden text-lg font-bold leading-tight text-white line-clamp-3 group-hover:text-emas">
            {{$data->judul}}
        </p>
        <div class="relative overflow-hidden border rounded-md aspect-square border-white/5">
            <img 
            src="{{asset('galeri/' . $data->foto)}}" 
            alt="{{$data->judul}}" 
            class="object-cover w-full h-full transition-all duration-300 transform "
            >
        </div>
        <p class="mt-4 text-xs text-right text-white md:text-sm">{{$data->created_at->format('d - M - Y')}}</p>
    </div>
</a>