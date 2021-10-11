<div class="container-fluid justify-content-end">
    <ul class="navbar-nav nav-pills">
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Home' ? 'active' : '' }} " href="/">Home</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'My Project' ? 'active' : '' }} " href="/project">Project</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }} " href="/contact">Contact</a>
        </li>
    </ul>
</div>
