<x-layout>

<div class="row">
    @foreach ($units as $unit)
    @if ($loop->odd && $loop->iteration != 1)
    </div>
    <div class="row">
    @endif
    <div class="col unit" data-unit_id="{{ $unit->id }}">
        <h3>Unit {{ $unit->number }}</h3>
        <div class="container-sm">
            <div class="row">
                @foreach ($unit->rooms as $room)
                    @if ($loop->odd && $loop->iteration != 1)
                    </div>
                    <div class="row">
                    @endif
                    <div class="col-5 room">Room {{ $room->number }}</div>
                    @if ($loop->odd)
                        <div class="col-2"></div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-6 room">Common</div>
                <div class="col-6 room">Kitchen</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</x-layout>
<script src="/js/units.js"></script>