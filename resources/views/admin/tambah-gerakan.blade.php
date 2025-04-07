<x-admin-layout>

    <div class="pb-10">
        <x-page-heading>Tambah Gerakan</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/store_gerakan" enctype="multipart/form-data">
    
                <x-forms.input name="judul" label="Judul" type="text"  placeholder="Tari Baris Gede Télék" required/>
                <x-forms.error name="judul" />
                <x-forms.textarea name="deskripsi" label="Deskripsi" type="text" placeholder="Tari Baris Gede Télék" required    />
                <x-forms.error name="deskripsi" />
                <x-forms.input name="link" label="Link Embed Youtube" type="text" required />
                <x-forms.error name="link" />
                            
                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>