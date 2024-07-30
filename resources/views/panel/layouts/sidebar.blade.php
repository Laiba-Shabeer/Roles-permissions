<nav id="sidebar" class="sidebar">
    <div class="sidebar-content ">
        <a class="sidebar-brand" href="index.html">
            <i class="align-middle" data-feather="box"></i>
            <span class="align-middle">Permissions</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a href="{{ url('panel/dashboard') }}" data-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>

                </a>
                {{-- <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="dashboard-default.html">Default</a>
                    </li>
                    <li class="sidebar-item active"><a class="sidebar-link"
                            href="dashboard-analytics.html">Analytics</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="dashboard-e-commerce.html">E-commerce</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="dashboard-social.html">Social</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="dashboard-crypto.html">Crypto</a>
                    </li>
                </ul> --}}
            </li>
            {{-- <li class="sidebar-item">
                <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-profile.html">Profile</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients</a></li>
                    <li class="sidebar-item">
                        <a href="#projects" data-toggle="collapse" class="sidebar-link collapsed">
                            Projects
                        </a>
                        <ul id="projects" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="pages-projects-list.html">List</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="pages-projects-detail.html">Detail <span
                                        class="sidebar-badge badge badge-primary">New</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span
                                class="sidebar-badge badge badge-primary">New</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a>
                    </li>
                </ul>
            </li> --}}
            <li class="sidebar-item">
                <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>

                </a>
                {{-- <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset
                            Password</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
                </ul> --}}
            </li>

            <li class="sidebar-item">
                <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>

                </a>
                {{-- <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset
                            Password</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
                </ul> --}}
            </li>


            <div class="sidebar-bottom d-none d-lg-block">
                <div class="media">
                    <img class="rounded-circle mr-3" src="{{ asset('assets/img\avatars\avatar.jpg') }}" alt="Chris Wood"
                        width="40" height="40">
                    <div class="media-body">
                        <h5 class="mb-1">Chris Wood</h5>
                        <div>
                            <i class="fas fa-circle text-success"></i> Online
                        </div>
                    </div>
                </div>
            </div>

    </div>
</nav>
