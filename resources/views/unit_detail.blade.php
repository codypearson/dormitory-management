<x-layout>
    <h2>Unit {{ $unit->number }}</h2>
    @foreach ($unit->rooms as $room)
        <h3>Room {{ $room->number }}</h3>
        @if (count($room->students) > 0)
            <ul class="list-group">
                @foreach ($room->students as $student)
                    <li class="list-group-item">{{ $student->name }}</li>
                @endforeach
            </ul>
        @else
            <p class="font-italic">No students currently assigned.</p>
        @endif
    @endforeach
</x-layout>