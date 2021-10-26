<div class="container-fluid justify-content-end">
    {{-- Mengatur Active Page --}}
    <ul class="navbar-nav nav-pills">
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Project' ? 'active' : '' }}" href="{{ route('project.index') }}">Project</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Course' ? 'active' : '' }}" href="{{ route('course.index') }}">Course</a>
        </li>
    </ul>
</div>
