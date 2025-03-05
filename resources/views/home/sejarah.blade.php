<x-layout>
    

    <!-- Section 1 -->
    <div class="flex flex-col items-center px-4 mx-auto mb-12 md:flex-row max-w-7xl md:px-4 lg:px-6 md:mb-16">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-48 p-1 mb-4 transition-all duration-300 border border-transparent md:w-1/2 md:h- 64 lg:h-96 md:mb-0 md:mr-5 rounded-xl hover:border-emas hover:-translate-y-1"
        >
        <div class="w-full md:w-1/2">
            <p class="text-justify text-md indent-5 md:indent-10 md:text-base lg:text-md">
                Tari Baris Gede Télék secara historis berhubungan langsung dengan cikal bakal Pura Dalem Kedewatan di Sanur. Tarian ini muncul saat perpindahan Pura Dalem Kedewatan dari Pradesa WIrasana Tangtu Padanggalak menuju Tegal Asah atau sekarang di kenal sebagai Sanur. Ketika pemindahan tersebut, seluruh kawula atau braya ikut serta mengiringi dengan membawa bahan-bahan pura berupa sesaka dan pratima. Iring-iringan para baraya ini disertai dengan ekspresi kegembiraan yang memuncak memunculkan geraka ritmis dan hentakan-hentakan kaki menyentuh tanah. Tanpa disadari ada beberapa pengiring yang mengalami trance atau kerahuan. Saat itu, berdenyar-denyarlah pawisik atau sabda yang meminta kepada para braya, kawula dan pengiring bahwa ketika Ida Bhatara di Pura Dalem Kedewatan tedun atau turun ke dunia, maka mesti diiringi dengan tarian Tari Baris Gede Télék
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
            <p class="text-justify text-md indent-5 md:indent-10 md:text-base lg:text-md">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. At numquam facere, praesentium obcaecati quod ipsum cumque, est eius sit eos quidem quas, libero quibusdam voluptas quam neque suscipit aspernatur possimus. 
            </p>
        </div>
    </div>


    <!-- Makna Section -->
    <div class="max-w-4xl px-4 mx-auto mb-20 md:mb-28">
        <x-page-heading>MAKNA</x-page-heading>
        <div class="p-6 mt-8 transition-all duration-300 border bg-white/5 rounded-xl border-white/15 hover:border-emas hover:-translate-y-1">
            <p class="leading-relaxed text-center text-md md:text-base lg:text-lg md:leading-loose">
                Makna Tari Baris Gede Télék yaitu sebagai pengantar atau pemendakan Ida Bhatara untuk medal atau keluar dari Griya Jero Gede Sanur menuju Pura Dalem Kedewatan sebagai lokasi pelaksanaan piodalan Tilem Kajeng, jadi kalau Tari Baris Gede Télék tidak dipentaskan di anggap ida bahatara tidak tedun.
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
                        <x-informasi-card :data="$data"/>
                    @endforeach
    
                    <!-- Pagination berada di tengah grid -->
                    <div class="flex col-span-1 mt-10 md:col-span-2 lg:col-span-3">
                        {{ $informasi->links() }}
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>