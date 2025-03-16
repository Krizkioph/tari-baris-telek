<x-layout>
    <div class="flex items-center justify-center min-h-[400px] sm:min-h-screen rounded-lg bg-white/5 duration-300 transition-all hover:border-emas border border-white/15 group relative overflow-hidden">
        
        <x-garis-pinggir/>

        <div class="relative z-10 w-full max-w-4xl p-6">
            <!-- Heading -->
            <div class="relative mb-8 text-center">
                <x-page-heading class="text-3xl font-bold text-transparent md:text-4xl bg-gradient-to-r from-emas to-amber-300 bg-clip-text">
                    Pura Dalem Kedewatan Sanur
                </x-page-heading>
            </div>

            <!-- Map container -->
            <div class="relative overflow-hidden transition-all duration-300 transform shadow-2xl rounded-2xl">
                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/30 to-transparent"></div>
                <div class="absolute inset-0 border-2 pointer-events-none border-white/10 rounded-2xl"></div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1117.328444135264!2d115.2575794094452!3d-8.674229155910854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240468b0421c7%3A0x29e669d6d9c70cd!2sPura%20Dalem%20Kedewatan%2C%20Sanur!5e1!3m2!1sid!2sid!4v1740922596019!5m2!1sid!2sid"
                    class="w-full h-64 sm:h-80 md:h-96 lg:h-[550px] border-none backdrop-blur-sm"
                    style="filter: grayscale(20%) contrast(110%);" 
                    allowfullscreen 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Address with icon -->
            <div class="flex justify-center mt-4 space-x-2">
                <svg class="w-5 h-5 text-emas" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="text-sm text-white/80">Jl. Hang Tuah No.21, Sanur Kaja, Denpasar Selatan, Kota Denpasar, Bali 80227</p>
            </div>

        </div>
    </div>
</x-layout>