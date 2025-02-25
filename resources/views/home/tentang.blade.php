<x-layout>
    <div class="flex flex-col items-center max-w-3xl p-4 mx-auto space-y-6 text-white border rounded-lg shadow-sm bg-white/5 border-white/15 md:p-8 md:flex-row md:space-y-0 md:space-x-8">
        <!-- Image Container -->
        <div class="w-full max-w-[12rem] transition-transform duration-300 transform hover:scale-105">
            <div class="overflow-hidden border rounded-lg aspect-square border-white/15">
                <img src="{{ Vite::asset('resources/images/VEDANTHA_ADISAPUTRA.png') }}" 
                     alt="Pembuat" 
                     class="object-cover w-full h-full">
            </div>
        </div>

        <!-- Content -->
        <div class="w-full text-center md:text-left">
            <div class="grid gap-3 sm:grid-cols-[auto_1fr] sm:items-baseline">
                <!-- Name -->
                <div class="sm:contents">
                    <p class="text-lg font-bold sm:text-xl">Nama :</p>
                    <p class="text-lg sm:text-xl">Ida Bagus Vedantha AdiSaputra</p>
                </div>

                <!-- NIM -->
                <div class="sm:contents">
                    <p class="mt-4 text-gray-400 sm:mt-0">NIM :</p>
                    <p class="text-gray-400">210030452</p>
                </div>

                <!-- Program Studi -->
                <div class="sm:contents">
                    <p class="mt-4 text-gray-400 sm:mt-0">Program Studi \n:</p>
                    <p class="text-gray-400">Sistem Informasi</p>
                </div>

                <!-- Alamat -->
                <div class="sm:contents">
                    <p class="mt-4 text-gray-400 sm:mt-0">Alamat :</p>
                    <p class="text-gray-400 break-words">Jl. By Pass Gusti Ngurah Rai GG Nuri II/4 Denpasar</p>
                </div>

                <!-- Sebagai -->
                <div class="sm:contents">
                    <p class="mt-4 text-gray-400 sm:mt-0">Sebagai :</p>
                    <p class="text-gray-400">Pembuat</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>