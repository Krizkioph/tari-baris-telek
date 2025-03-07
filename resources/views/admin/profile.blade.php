<x-admin-layout>
    <div class="grid max-w-2xl gap-6 mx-auto sm:grid-cols-2">
        <!-- Card Ganti Nama -->
        <div class="flex flex-col items-center p-6 text-center border rounded-lg shadow-lg border-white/10 bg-white/5">
            <h2 class="text-xl font-semibold text-white">{{ Auth::user()->name }}</h2>
            <a href="/profile/ganti-nama" 
               class="px-4 py-2 mt-4 text-lg font-bold text-white transition rounded-lg bg-emas hover:bg-emas/80">
                Ganti Nama
            </a>
        </div>
        
        <!-- Card Ganti Password -->
        <div class="flex flex-col items-center p-6 text-center border rounded-lg shadow-lg border-white/10 bg-white/5">
            <h2 class="text-xl font-semibold text-white">Password</h2>
            <a href="/profile/ganti-password" 
               class="px-4 py-2 mt-4 text-lg font-bold text-white transition rounded-lg bg-emas hover:bg-emas/80">
                Ganti Password
            </a>
        </div>
    </div>
</x-admin-layout>