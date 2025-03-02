@props(['href'])


<a href="{{$href}}" class="inline-block px-6 py-2 font-semibold text-white transition duration-300 bg-blue-500 border rounded-lg shadow-md hover:text-emas border-white/15 hover:border-emas hover:bg-blue-700">
    {{$slot}}
</a>