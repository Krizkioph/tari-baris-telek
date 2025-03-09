<x-admin-layout>

    <div>
        <x-page-heading>Ganti Password</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/profile/update_password">
                @method('PATCH')
                
                <x-forms.input name="password_lama" label="Password Saat Ini" type="password" required />
                <x-forms.error name="password_lama" />
                <x-forms.input name="password_baru" label="Password Baru" type="password" required />
                <x-forms.error name="password_baru"/>
                <x-forms.input name="password_confirmation" label="Konfirmasi Password Baru" type="password" required />
                <x-forms.error name="password_confirmation" />


                <div class="flex gap-4 pb-4">
                    <x-forms.button>Simpan</x-forms.button>
                    <x-button-kembali href="javascript:history.back()">Batal</x-button-kembali>
                </div>
            </x-forms.form>
        </div>
    </div>


</x-admin-layout>