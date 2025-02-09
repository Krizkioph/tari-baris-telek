<x-admin-layout>
    <div class="px-6 py-4">
        <div class="overflow-x-auto rounded-lg shadow-lg bg-white/5">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-white bg-gradient-to-r from-gray-800 to-gray-900">
                        <th class="px-6 py-3 border-b border-gray-700">No</th>
                        <th class="px-6 py-3 border-b border-gray-700">Deskripsi</th>
                        <th class="px-6 py-3 border-b border-gray-700">Gambar</th>
                        <th class="px-6 py-3 border-b border-gray-700">Diupload Oleh</th>
                        <th class="px-6 py-3 border-b border-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700 ">
                    @foreach ($data as $item)
                        <tr class="transition hover:bg-gray-800">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('galeri/' . $item->foto) }}" 
                                     alt="{{ $item->deskripsi }}" 
                                     class="object-cover w-24 h-24 border border-gray-700 rounded-lg shadow-md">
                            </td>
                            <td class="px-6 py-4">{{ $item->user->name }}</td>
                            <td class="flex gap-2 px-6 py-4">
                                <a href="#" class="px-3 py-1 text-sm font-medium text-white transition bg-blue-500 rounded-lg hover:bg-blue-700">Edit</a>
                                <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 text-sm font-medium text-white transition bg-red-500 rounded-lg hover:bg-red-700">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
