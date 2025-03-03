<x-layout>
    <div class="flex flex-col items-center justify-center md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36">
        
        <!-- Container untuk Penari -->
        <div class="text-center">
            <p class="mb-2 text-3xl font-bold text-center text-transparent md:text-3xl lg:text-4xl bg-clip-text from-emas bg-gradient-to-r to-white">Penari</p> 
            <div class="relative block w-full max-w-xs overflow-hidden transition-all border rounded-lg duration-400 group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15 hover:border-emas">
                <img 
                    src="{{ Vite::asset('resources/images/penari.png') }}" 
                    alt="Penari" 
                    class="w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                    filter brightness-95 group-hover:brightness-100 
                    group-hover:scale-105 
                    group-hover:shadow-2xl 
                    group-hover:shadow-[rgba(255,215,0,0.2)]"
                >
                <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
            </div>
            <div class="max-w-xs p-4 mt-4 text-center border rounded-lg md:max-w-64 lg:max-w-72 bg-white/5 border-white/15">
                <p class="text-lg font-semibold">Busana putih melambangkan kesucian dan semangat prajurit yang siap bertempur dalam peperangan</p>
            </div>
        </div>

        <!-- Container untuk Petelek -->
        <div class="text-center">
            <p class="mb-2 text-3xl font-bold text-center text-transparent md:text-3xl lg:text-3xl bg-clip-text from-emas bg-gradient-to-r to-white">Petelek</p> 
            <div class="relative block w-full max-w-xs overflow-hidden transition-all border rounded-lg duration-400 group md:w-64 lg:w-72 lg:mt-8 bg-white/5 border-white/15 hover:border-emas">
                <img 
                    src="{{ Vite::asset('resources/images/petelek.png') }}" 
                    alt="Petelek" 
                    class="w-full transition-all duration-400 ease-[cubic-bezier(0.4,0,0.2,1)] transform rounded-lg shadow-md 
                        filter brightness-95 group-hover:brightness-100 
                        group-hover:scale-105 
                        group-hover:shadow-2xl 
                        group-hover:shadow-[rgba(255,215,0,0.2)]"
                >
                <div class="absolute inset-0 transition-all rounded-lg opacity-0 duration-400 bg-gradient-to-t from-black/20 to-transparent group-hover:opacity-100"></div>
            </div>
            <div class="max-w-xs p-4 mt-4 text-center border rounded-lg md:max-w-64 lg:max-w-72 bg-white/5 border-white/15">
                <p class="text-lg font-semibold">Busana hitam merujuk kepada Dewa Siwa dan berfungsi sebagai pembeda utama dari penari lainnya</p>
            </div>
        </div>
    </div>
</x-layout>