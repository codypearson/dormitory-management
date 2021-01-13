<x-layout>
    <div class="list-group">
        @foreach ($floors as $floor)
            <a class="list-group-item list-group-item-action" href="{{ route('units', $floor->id) }}">Floor {{ $floor->number }}</a>
        @endforeach
    </div>
</x-layout>