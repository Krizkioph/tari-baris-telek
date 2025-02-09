<x-admin-layout>

    <div>
        <x-page-heading>Tambah Foto</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/store_galeri" enctype="multipart/form-data">
    
                <x-forms.textarea name="deskripsi" label="Deskripsi" type="text" placeholder="Tari Baris Gede Telek" />
                <x-forms.input name="foto" label="Gambar" type="file" />
                            
                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>