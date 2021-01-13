<x-layout>
    <form method="POST" action="{{ route('save-student') }} ">
        @csrf
        <input type="hidden" name="id" value="{{ $student->id ?? '' }}" />
        <div class="form-group">
            <label for="name-field">Name</label>
            <input id="name-field" class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ $student->name ?? old('name') }}" />
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            Gender&nbsp;
            <div class="form-check form-check-inline">
                <input id="male-button" class="form-check-input" name="gender" type="radio" value="M" @if(($student && $student->gender == 'M') || old('gender') == 'M') checked @endif />
                <label for="male-button" class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input id="female-button" class="form-check-input" name="gender" type="radio" value="F" @if(($student && $student->gender == 'F') || old('gender') == 'F') checked @endif />
                <label for="female-button" class="form-check-label">Female</label>
            </div>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dob-field">Date of Birth</label>
            <input id="dob-field" class="form-control @error('dob') is-invalid @enderror" name="dob" type="date" value="{{ $student->dob ?? old('dob') }}" />
            @error('dob')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id-field">Student ID</label>
            <input id="id-field" class="form-control @error('student_id') is-invalid @enderror" name="student_id" type="text" value="{{ $student->student_id ?? old('student_id') }}" />
            @error('student_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address-field">Home Address</label>
            <textarea id="address-field" class="form-control" name="home_address">
                {{ $student->home_address ?? old('home_address') }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="phone-field">Phone Number</label>
            <input id="phone-field" class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" value="{{ $student->phone_number ?? old('phone') }}" />
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="room-field">Dormitory Room</label>
            <select id="room-field" class="form-control @error('room_id') is-invalid @enderror" name="room_id">
                <option value="">None</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" @if(($student && $student->room_id == $room->id) || old('room_id') == $room->id) selected="selected" @endif >{{ $room->unit->floor->dormitory->name }}, Floor {{ $room->unit->floor->number }}, Unit {{ $room->unit->id }}, Room {{ $room->number }}</option>
                @endforeach
            </select>
            @error('room_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</x-layout>