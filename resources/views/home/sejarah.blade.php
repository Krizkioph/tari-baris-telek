<x-layout>
    <!-- Section 1 -->
    <div class="flex flex-col items-center px-4 mx-auto mb-12 md:flex-row max-w-7xl md:px-8 lg:px-12 md:mb-16">
        <img 
            src="{{ Vite::asset('resources/images/pura-dalem-kedewatan.jpg') }}" 
            alt="Pura Dalem Kedewatan" 
            class="object-cover w-full h-48 mb-4 transition-shadow shadow-[0_8px_20px_-5px_rgba(255,255,255,0.1)] md:w-1/2 md:h-64 lg:h-96 md:mb-0 md:mr-5 rounded-xl hover:shadow-md hover:shadow-emas"
        >
        <div class="w-full md:w-1/2">
            <p class="text-sm text-justify indent-5 md:indent-10 md:text-base lg:text-m">
                Tari Baris Gede Télék berasal dari desa adat Sanur yang termasuk ke dalam bagian wilayah Kota Denpasar. Tari Baris Gede Télék adalah tarian sakral yang sering dipentaskan saat piodalan Tilem Kajeng atau setiap enam bulan kalender bali di Pura Dalem Kedewatan. Menurut Kadek Sumariyasa, istilah "Télék" berasal dari kata "Telek," yang berarti pemimpin pasukan perang. Tari Baris Gede Télék menggambarkan kegagahan seorang prajurit yang bersiap melaksanakan peperangan dengan membawa tombak sepanjang 4 meter. Pementasan tari ini diiringi irama Gambelan Gong Kebyar dan dibawakan oleh 13 penari laki-laki, dengan satu orang sebagai petelek (pemimpin). 
            </p>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="flex flex-col items-center px-4 mx-auto mb-12 md:flex-row max-w-7xl md:px-8 lg:px-12 md:mb-16">
        <div class="w-full md:w-1/2 md:order-2">
            <img 
                src="{{ Vite::asset('resources/images/tari-telek.jpg') }}" 
                alt="Detail Tari Baris Gede Télék" 
                class="object-cover w-full h-48 mb-4 transition-shadow shadow-[0_8px_20px_-5px_rgba(255,255,255,0.1)] md:w-full md:h-64 lg:h-96 md:mb-0 md:ml-5 rounded-xl hover:shadow-md hover:shadow-emas"
            >
        </div>
        <div class="w-full md:w-1/2 md:order-1 md:pr-5">
            <p class="text-sm text-justify indent-5 md:indent-10 md:text-base lg:text-m">
                Tari Baris Gede Télék secara historis berhubungan langsung dengan cikal bakal Pura Dalem Kedewatan di Sanur. Tarian ini muncul saat perpindahan Pura Dalem Kedewatan dari Pradesa WIrasana Tangtu Padanggalak menuju Tegal Asah atau sekarang di kenal sebagai Sanur. Ketika pemindahan tersebut, seluruh kawula atau braya ikut serta mengiringi dengan membawa bahan-bahan pura berupa sesaka dan pratima. Iring-iringan para baraya ini disertai dengan ekspresi kegembiraan yang memuncak memunculkan geraka ritmis dan hentakan-hentakan kaki menyentuh tanah. Tanpa disadari ada beberapa pengiring yang mengalami trance atau kerahuan. Saat itu, berdenyar-denyarlah pawisik atau sabda yang meminta kepada para braya, kawula dan pengiring bahwa ketika Ida Bhatara di Pura Dalem Kedewatan tedun atau turun ke dunia, maka mesti diiringi dengan tarian Tari Baris Gede Télék   
            </p>
        </div>
    </div>





    {{-- INFORMATION --}}
    <div class="mt-24 md:mt-36">
        <x-page-heading>Informasi</x-page-heading>
        
        <div class="px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 gap-6 p-6 shadow-md md:grid-cols-2 lg:grid-cols-3 rounded-xl">
                    
                    @foreach ($informasi as $data)
                        <div class="p-6 text-center transition-shadow shadow-[0_8px_20px_-5px_rgba(255,255,255,0.1)] bg-white/5 md:p-8 rounded-xl hover:shadow-sm hover:shadow-emas group">
                            <!-- Teks dengan tinggi tetap -->
                            <a href="">

                                <p class="h-16 mb-4 overflow-hidden text-lg font-bold leading-tight text-white line-clamp-3 group-hover:text-emas">
                                    {{$data->judul}}
                                </p>
                            </a>
                            <div class="relative overflow-hidden border rounded-md aspect-square border-white/5">
                                <img 
                                    src="{{asset('galeri/' . $data->foto)}}" 
                                    alt="{{$data->judul}}" 
                                    class="object-cover w-full h-full transition-all duration-300 transform "
                                >
                            </div>
                            <p class="mt-4 text-xs text-right text-white md:text-sm">{{$data->created_at->format('d - M - Y')}}</p>
                        </div>
                    @endforeach
    
                    <!-- More Button -->
                    <div class="mt-6">
                        {{ $informasi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>