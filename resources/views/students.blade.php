<x-layout>
    <div class="row justify-content-end">
        <div class="col right-align">
            <a class="btn btn-primary" href="{{ route('edit-student') }}">Add Student</a>
        </div>
    </div>
    <div class="row">
    <div class="col">
    <table class="table table-striped">
        <thead>
            <th scope="col"></th>
            <th scope="col">Student Name</th>
            <th scope="col">Student ID</th>
            <th scope="col">Current Room</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{ route('edit-student', $student->id) }}">Edit</a>
                        <button type="button" class="btn btn-danger delete-student" data-student_id="{{ $student->id }}" data-csrf_token="{{ csrf_token() }}">Delete</button>
                    </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->room->unit->floor->dormitory->name }}, Floor {{ $student->room->unit->floor->number }}, Unit {{ $student->room->unit->number }}, Room {{ $student->room->number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
</x-layout>
<script src="/js/students.js"></script>