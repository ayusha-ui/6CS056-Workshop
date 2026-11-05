<x-layouts.app title="Students">

    <h1>Students</h1>

    <a href="{{ route('students.create') }}" class="btn">
        Create Student
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>

                    <td>
                        <a href="{{ route('students.show', $student) }}">
                            View
                        </a>

                        <a href="{{ route('students.edit', $student) }}">
                            Edit
                        </a>

                        <x-delete-form
                            :action="route('students.destroy', $student)"
                        />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</x-layouts.app>
