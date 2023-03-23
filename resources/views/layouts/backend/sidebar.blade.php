        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="50">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="50">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.subscriber.index') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Subscriber</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.spinner.create') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Allowlist
                                    Create</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                        {{--
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.spinner.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Spinner </span>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.blog.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Blog Post </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.portfolio.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">All Portfolio </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.contract.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">All Contract </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.order.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">All Orders </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.job.index') }}">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">All Job </span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
