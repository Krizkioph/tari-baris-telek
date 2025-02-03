<x-layout>
    {{-- Sejarah --}}
    <div class="flex flex-col items-center justify-center px-4 mx-auto md:flex-row max-w-7xl md:px-8 lg:px-12">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-48 mb-4 md:w-1/2 md:h-64 lg:h-96 md:mb-0 md:mr-5 rounded-xl"
        >
        <p class="w-full text-sm text-justify md:w-1/2 indent-5 md:indent-10 md:text-base lg:text-m">
            Tari Baris Gede Télék secara historis berhubungan langsung dengan cikal bakal Pura Dalem Kedewatan di Sanur. Tarian ini muncul saat perpindahan Pura Dalem Kedewatan dari Pradesa WIrasana Tangtu Padanggalak menuju Tegal Asah atau sekarang di kenal sebagai Sanur. Ketika pemindahan tersebut, seluruh kawula atau braya ikut serta mengiringi dengan membawa bahan-bahan pura berupa sesaka dan pratima. Iring-iringan para baraya ini disertai dengan ekspresi kegembiraan yang memuncak memunculkan geraka ritmis dan hentakan-hentakan kaki menyentuh tanah. Tanpa disadari ada beberapa pengiring yang mengalami trance atau kerahuan. Saat itu, berdenyar-denyarlah pawisik atau sabda yang meminta kepada para braya, kawula dan pengiring bahwa ketika Ida Bhatara di Pura Dalem Kedewatan tedun atau turun ke dunia, maka mesti diiringi dengan tarian Tari Baris Gede Télék   
        </p>
    </div>

    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>Information</x-page-heading>
    
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    <!-- Card 1 -->
                    <x-card-information/>
    
                    <!-- Card 2 -->
                    <x-card-information/>
    
                    <!-- Card 3 -->
                    <x-card-information/>
    
                    <!-- More Button -->
                    <div class="flex justify-center mt-6 col-span-full md:mt-8">
                        <x-forms.button class="px-8 py-3 text-sm md:text-base">More</x-forms.button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BUSANA --}}
    <div class="mt-36">
        <x-page-heading>Busana</x-page-heading>
    
        <div class="flex flex-col items-center justify-center p-4 md:flex-row gap-y-8 md:gap-x-24 lg:gap-x-36">
            <img 
                src="{{ Vite::asset('resources/images/penari.png') }}" 
                alt="Penari" 
                class="w-full max-w-xs md:max-w-none md:w-80 lg:w-96"
            >
            <img 
                src="{{ Vite::asset('resources/images/petelek.png') }}" 
                alt="Petelek" 
                class="w-full max-w-xs md:max-w-none md:w-80 lg:w-96"
            >
        </div>
    </div>

    {{-- GALERI --}}
    <div class="mt-36">
        <x-page-heading>Galeri</x-page-heading>
    
        <div class="flex flex-col items-center">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-4 px-4 mt-6 mb-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Gambar-gambar -->
                <img 
                    src="https://picsum.photos/300/300?random=1" 
                    alt="Dummy 1" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=2" 
                    alt="Dummy 2" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=3" 
                    alt="Dummy 3" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=4" 
                    alt="Dummy 4" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                <img 
                    src="https://picsum.photos/300/300?random=5" 
                    alt="Dummy 5" 
                    class="object-cover w-full transition-all duration-300 transform rounded-lg aspect-square hover:-translate-y-2 hover:shadow-lg">
                
            </div>
    
           <x-forms.button>More</x-forms.button>
        </div>
    </div>
</x-layout>