            <div class="container-fluid">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-link">
                        <a class="nav-link
                        {{ $pagetitle == 'Welcome Home' ? 'active' : '' }}
                        "
                            href="/">Home</a>

                    </li>
                    <li class="nav-link">
                        <a class="nav-link
                        {{ $pagetitle == 'My Project' ? 'active' : '' }}
                        "
                            href="/project">Project</a>

                    </li>
                    <li class="nav-link">
                        <a class="nav-link
                        {{ $pagetitle == 'My Contact' ? 'active' : '' }}
                        "
                            href="/contact">Contact</a>

                    </li>
                </ul>
            </div>
