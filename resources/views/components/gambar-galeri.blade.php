@props(['width' => '200', 'alt' => 'Gallery Image'])

<img 
    src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{$width}}" 
    alt="{{ $alt }}"
    class="object-cover w-full h-full"
    loading="lazy"
>