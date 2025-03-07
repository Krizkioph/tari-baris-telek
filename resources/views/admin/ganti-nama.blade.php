<x-admin-layout>

    <div>
        <x-page-heading>Ganti Nama</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/profile/update_nama">
                @method('PATCH')
                
                <x-forms.input name="name" label="Ubah nama" type="text" required />
                <x-forms.error name="name" />
                


                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>


</x-admin-layout>