<x-admin-layout>

    <div>
        <x-page-heading>Edit Gerakan</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/dashboard/update_gerakan/{{$data->id}}" enctype="multipart/form-data">
                @method('PATCH')
    
                <x-forms.input name="judul" label="Judul" type='text' value="{{ $data->judul }}" required />
                <x-forms.error name="judul" />
                <x-forms.textarea name="deskripsi" type='text' label="Deskripsi" value="{{ $data->deskripsi }}" required />
                <x-forms.error name="deskripsi" />
                <x-forms.input name="link" label="Link (Hanya Satu Link Youtube)" type='text' value="{{ $data->link }}" required />
                <x-forms.error name="link" />
                            
                <div class="flex gap-4 pb-4">
                    <x-forms.button>Simpan</x-forms.button>
                    <x-button-kembali href="javascript:history.back()">Batal</x-button-kembali>
                </div>
            </x-forms.form>
        </div>
    </div>

</x-admin-layout>