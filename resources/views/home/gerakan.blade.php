<x-layout>
    @foreach ($gerakan as $index => $data)
        <x-gerakan-card
            :data="$data"
            :index="$index"
        />
    @endforeach
</x-layout>
