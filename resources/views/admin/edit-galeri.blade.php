<x-admin-layout>

    <div>
        <x-page-heading>Edit Foto</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/update_galeri/{{$data->id}}" enctype="multipart/form-data">
                @method('PATCH')
    
                <x-forms.textarea name="deskripsi" label="Deskripsi" value="{{ $data->deskripsi }}" required />
                <x-forms.error name="deskripsi" />
                <div class="p-4 border rounded-lg shadow-lg bg-white/10 border-white/10">
                    <img src="{{ asset('galeri/' . $data->foto) }}" 
                    alt="{{ $data->deskripsi }}" 
                    class="object-cover w-48 h-48 border border-gray-700 rounded-lg shadow-md">
                </div>

                <x-forms.input name="foto" label="Gambar" type="file" />
                <x-forms.error name="foto" />
                            
                <div class="flex gap-4 pb-4">
                    <x-forms.button>Simpan</x-forms.button>
                    <x-button-kembali href="javascript:history.back()">Batal</x-button-kembali>
                </div>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>