    <div class="container-fluid">
        <ul class="navbar-nav nav-pills">
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Home') active @endif" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Project') active @endif" href="/project">Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Contact') active @endif" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
