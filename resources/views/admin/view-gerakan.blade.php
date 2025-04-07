<x-admin-layout>
    <div>
        <div class="overflow-x-auto rounded-lg shadow-lg bg-white/5">
            <table class="w-full border-collapse">
                <thead class="text-center">
                    <tr class="text-white bg-gradient-to-r from-gray-800 to-gray-900">
                        <th class="px-6 py-3 border-b border-gray-700">No</th>
                        <th class="px-6 py-3 border-b border-gray-700">Judul</th>
                        <th class="px-6 py-3 border-b border-gray-700">Deskripsi</th>
                        <th class="px-6 py-3 border-b border-gray-700">Diupload Oleh</th>
                        <th class="px-6 py-3 border-b border-gray-700">Diupload Pada</th>
                        <th class="px-6 py-3 border-b border-gray-700">Link Embed Youtube</th>
                        <th class="px-6 py-3 border-b border-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700 ">
                    @foreach ($gerakan as $data)
                        <tr class="transition hover:bg-gray-800">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $data->judul }}</td>
                            <td class="px-6 py-4">{{ $data->deskripsi }}</td>
                            <td class="px-6 py-4">{{ $data->admin->name }}</td>
                            <td class="px-6 py-4">{{ $data->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4">{{ $data->link }}</td>
                            <td class="flex gap-2 px-6 py-10 ">
                                <a href="/dashboard/edit_gerakan/{{$data->id}}" class="px-5 py-3 text-sm font-medium text-white transition bg-blue-500 rounded-lg hover:bg-blue-700">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
