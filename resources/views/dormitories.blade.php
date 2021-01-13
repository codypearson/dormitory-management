<x-layout>
    <div class="list-group">
        @foreach ($dormitories as $dormitory)
            <a class="list-group-item list-group-item-action" href="{{ route('floors', $dormitory->id) }}">{{ $dormitory->name }}</a>
        @endforeach
    </div>
</x-layout>