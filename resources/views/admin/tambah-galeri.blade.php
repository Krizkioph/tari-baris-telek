<x-admin-layout>

    <div class="">
        <x-page-heading>Tambah Foto</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/store_galeri" enctype="multipart/form-data">
    
                <x-forms.textarea name="deskripsi" label="Deskripsi" type="text" placeholder="Tari Baris Gede Télék" required    />
                <x-forms.error name="deskripsi" />
                <x-forms.input name="foto" label="Gambar" type="file" required />
                <x-forms.error name="foto" />
                            
                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>