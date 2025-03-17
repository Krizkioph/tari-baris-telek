<x-layout>
    

    <!-- Section 1 -->
    <div class="flex flex-col items-center px-4 mx-auto mb-12 md:flex-row max-w-7xl md:px-4 lg:px-6 md:mb-16">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-48 p-1 mb-4 transition-all duration-300 border border-transparent md:w-1/2 md:h- 64 lg:h-96 md:mb-0 md:mr-5 rounded-xl hover:border-emas hover:-translate-y-1"
        >
        <div class="w-full md:w-1/2">
            <p class="text-justify text-md indent-5 md:indent-10 md:text-base lg:text-lg">
                Di telisik secara historis, keberadaan Tari Baris Gede Télék berhubungan secara langsung dengan cikal bakal pura dalem kedewatan di sanur. Tari Baris Gede télék muncul saat perpindahan Pura Dalem Kedewatan dari Pradesa Wirasana Tangtu Padanggalak menuju Tegal Asah (Sekarang dikenal sebagai Sanur). Ketika perpindahan itu, seluruh kawula atau braya ikut serta mengiringi dengan membawa bahan-bahan pura berupa sesaka dan pratima iringan-iringan para braya ini disertai dengan ekspresi kegembiraan yang memuncak, keriangan hati yang tiada tara.Bahkan mereka saling melempar-lempar sesaka yang digopohnya, sampai memunculkan gerak ritmis dan hentakan-hentakan kaki menyentuk tahan. 
            </p>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="flex flex-col items-center px-4 mx-auto mb-28 md:flex-row max-w-7xl md:px-4 lg:px-6 md:mb-32">
        <div class="w-full md:w-1/2 md:order-2">
            <img 
                src="{{ Vite::asset('resources/images/tari-telek.jpg') }}" 
                alt=" Tari Baris Gede Télék" 
                class="object-cover w-full h-48 p-1 mb-4 transition-all duration-300 border border-transparent hover:border-emas md:w-full md:h-64 lg:h-96 md:mb-0 md:ml-5 rounded-xl hover:-translate-y-1"
            >
        </div>
        <div class="w-full md:w-1/2 md:order-1 md:pr-5">
            <p class="text-justify text-md indent-5 md:indent-10 md:text-base lg:text-lg">
                Tanpa disadari, ternyata ada beberapa pengiring yang mengalami trance atau Kerahuan. Saat itu berdenyar-denyarlah pawisik atau sabda yang meminta kepada para braya, kawula dan pengiring bahwa ketida ida bhatara di Pura Dalem Kedewatan tedun atau turun kedunia , maka mesti diiringi dengan Tarian Baris Gede Télék  atau Tarian I Kebo Dengkol. Oleh karena kemunculan pawisik itu. sampai saat ini, manakala wakti Tilem bertemu Kajeng,maka pada titik pertemua itu, Ida Bhatara/bhatari di Pura Dalem Kedewatan akan tedun dan masyarakat Desa Sanur bersiap Mementaskan Tarian Baris Gede Télék.
            </p>
        </div>
    </div>


    <!-- Makna Section -->
    <div class="max-w-4xl px-4 mx-auto mb-20 md:mb-28">
        <x-page-heading>MAKNA</x-page-heading>
        <div class="relative p-6 mt-8 transition-all duration-300 border bg-white/5 rounded-xl border-white/15 hover:-translate-y-1 group hover:border-emas"
             data-aos="fade-up"
             data-aos-duration="800"
             data-aos-offset="200">
            
            <x-garis-pinggir/>
            
            <p class="leading-relaxed text-center text-md md:text-base lg:text-lg md:leading-loose">
                Makna Tari Baris Gede Télék yaitu sebagai pengantar atau pemendakan Ida Bhatara untuk medal atau keluar dari Griya Jero Gede Sanur menuju Pura Dalem Kedewatan sebagai lokasi pelaksanaan piodalan Tilem Kajeng. Jadi, jika Tari Baris Gede Télék tidak dipentaskan, dianggap Ida Bhatara/Bhatari tidak tedun.
            </p>
        </div>
    </div>




    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>INFORMASI</x-page-heading>
    
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Grid untuk item dan pagination -->
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    
                    @foreach ($informasi as $data)
                        <x-informasi-card 
                            :data="$data"
                            :data="$data" 
                            data-aos="fade-up" 
                            data-aos-delay="{{ $loop->index * 150 }}" 
                            data-aos-duration="700"
                            data-aos-easing="ease-out-cubic"/>
                        
                    @endforeach
    
                    <!-- Pagination berada di tengah grid -->
                    <div class="flex justify-center col-span-1 mt-10 md:col-span-2 lg:col-span-3">
                        {{ $informasi->links() }}
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>