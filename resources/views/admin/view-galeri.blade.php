<x-admin-layout>
    <div>
        <div class="overflow-x-auto rounded-lg shadow-lg bg-white/5">
            <table class="w-full border-collapse">
                <thead class="text-center">
                    <tr class="text-white bg-gradient-to-r from-gray-800 to-gray-900">
                        <th class="px-6 py-3 border-b border-gray-700">No</th>
                        <th class="px-6 py-3 border-b border-gray-700">Deskripsi</th>
                        <th class="px-6 py-3 border-b border-gray-700">Diupload Oleh</th>
                        <th class="px-6 py-3 border-b border-gray-700">Diupload Pada</th>
                        <th class="px-6 py-3 border-b border-gray-700">Gambar</th>
                        <th class="px-6 py-3 border-b border-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700 ">
                    @foreach ($galeri as $data)
                        <tr class="transition hover:bg-gray-800">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $data->deskripsi }}</td>
                            <td class="px-6 py-4">{{ $data->admin->name }}</td>
                            <td class="px-6 py-4">{{ $data->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('galeri/' . $data->foto) }}" 
                                     alt="{{ $data->deskripsi }}" 
                                     class="object-cover w-56 border border-gray-700 rounded-lg shadow-md h-36">
                            </td>
                            <td class="flex gap-2 px-6 py-10 ">
                                <a href="/dashboard/edit_galeri/{{$data->id}}" class="px-5 py-3 text-sm font-medium text-white transition bg-blue-500 rounded-lg hover:bg-blue-700">Edit</a>
                                <form action="/dashboard/delete_galeri/{{$data->id}}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-5 py-3 text-sm font-medium text-white transition bg-red-500 rounded-lg hover:bg-red-700">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($galeri->hasPages())
                <div class="flex justify-center py-4 mt-10 border-t border-gray-700">
                    {{ $galeri->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
