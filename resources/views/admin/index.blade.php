<x-admin-layout>
    <div class="flex flex-row gap-4">
        <!-- Card to display gallery data count -->
        <div class="max-w-sm border rounded-lg shadow-lg border-white/10 bg-white/5">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-white">Jumlah Foto Galeri :</h2>
                <p class="mt-2 text-3xl font-bold text-emas">{{$galeri}}</p>
            </div>
        </div>

        <div class="max-w-sm border rounded-lg shadow-lg border-white/10 bg-white/5">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-white">Jumlah Informasi :</h2>
                <p class="mt-2 text-3xl font-bold text-emas">{{$informasi}}</p>
            </div>
        </div>
    </div>
</x-admin-layout>
