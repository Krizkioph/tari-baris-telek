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


                <x-forms.button>Simpan</x-forms.button>
            </x-forms.form>
        </div>
    </div>


</x-admin-layout>