@props(['href'])

<a href="{{$href}}" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 border-2 rounded shadow-md border-white/15 bg-white/5 hover:text-emas hover:border-emas hover:bg-white/10">
    {{$slot}}
</a>