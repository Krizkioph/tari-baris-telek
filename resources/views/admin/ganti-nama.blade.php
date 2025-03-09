<x-admin-layout>

    <div>
        <x-page-heading>Ganti Nama</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/profile/update_nama">
                @method('PATCH')
                
                <x-forms.input name="name" label="Ubah nama" type="text" required />
                <x-forms.error name="name" />
                


                <div class="flex gap-4 pb-4">
                    <x-forms.button>Simpan</x-forms.button>
                    <x-button-kembali href="javascript:history.back()">Batal</x-button-kembali>
                </div>
            </x-forms.form>
        </div>
    </div>


</x-admin-layout>