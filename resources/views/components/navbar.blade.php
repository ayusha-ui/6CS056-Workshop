
<nav class="navbar">
    <a href="{{ url('/') }}" class="brand">Training Institute</a>

    <div>
        <a href="{{ route('students.index') }}"
           class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
            Students
        </a>

        <a href="{{ route('courses.index') }}"
           class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
            Courses
        </a>
    </div>
</nav>

