<x-admin-layout>

    <div>
        <x-page-heading>Tambah Informasi</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/store_informasi" enctype="multipart/form-data">
    
                <x-forms.input name="judul" label="Judul" type="text"  placeholder="Tari Baris Gede Telek" required/>
                <x-forms.error name="judul" />
                <x-forms.textarea name="deskripsi" label="Deskripsi" type="text"  placeholder="......" required/>
                <x-forms.error name="deskripsi" />
                <x-forms.input name="foto" label="Gambar" type="file" required/>
                <x-forms.error name="foto" />
                            
                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>