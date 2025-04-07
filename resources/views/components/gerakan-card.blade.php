@props(['data', 'index'])

<div class="relative flex flex-col items-center justify-center px-6 py-6 mx-auto transition-all duration-500 border rounded-md mb-14 md:mb-16 max-w-7xl md:flex-row {{ $index === 1 ? 'md:flex-row-reverse' : '' }} md:items-center lg:px-12 border-white/15 hover:-translate-y-1 bg-white/5 group hover:border-emas"
    data-aos="{{ $index === 1 ? 'fade-left' : 'fade-right' }}"
    data-aos-duration="600"
    data-aos-delay="300"
>
    <x-garis-pinggir/>

    <div class="w-full h-64 md:w-1/2 md:h-80 lg:h-96">  
        <iframe 
            class="w-full h-full border rounded-xl border-white/15" 
            src="{{ $data->link }}" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>

    <div class="flex flex-col items-center justify-center mt-8 ml-0  {{ $index === 1 ? 'md:mr-10 lg:items-end' : 'md:ml-10 lg:items-start' }} md:w-1/2 md:mt-0">
        <h1 class="text-4xl font-bold text-center text-transparent transition-colors duration-300 md:text-3xl lg:text-5xl bg-clip-text from-emas bg-gradient-to-r to-white">{{ $data->judul }}</h1>
        <p class="mt-6 text-lg leading-relaxed text-justify md:text-base lg:text-lg">
            {{ $data->deskripsi }}
        </p>
    </div>
</div>

<br>
