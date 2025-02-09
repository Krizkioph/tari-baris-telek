<x-admin-layout>

    <div>
        <x-page-heading>Tambah Informasi</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
    
                <x-forms.input name="title" label="Judul" type="text" />
                <x-forms.textarea name="deskripsi" label="Deskripsi" type="text" />
                <x-forms.input name="gambar" label="Gambar" type="file" />
                            
                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>