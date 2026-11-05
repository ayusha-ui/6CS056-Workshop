<x-layouts.app title="Edit Course">

    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        @include('course._form')

        <button type="submit" class="btn">
            Update Course
        </button>

        <a href="{{ route('courses.show', $course) }}">
            Cancel
        </a>
    </form>

</x-layouts.app>
