<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/dash') ? 'active' : '' }}" aria-current="page"
                            href="/dash">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/customer/index') ? 'active' : '' }}" href="/custom">
                            <span data-feather="file-text"></span>
                            Customer
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
{{-- <body>
    <nav class="sidebar navbar-expand d-flex flex-column align-item-star" id="sidebarMenu">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">Menu</div>
        </a>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request :: is ('/dash') ? 'active' : ''}}" aria-current="page" href="/dash">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request :: is ('/customer/index') ? 'active' : ''}}" aria-current="page"href="/custom">
                    <span data-feather="file-text"></span>
                    Customer
                </a>
            </li>
        </ul>
    </nav>
</body> --}}
