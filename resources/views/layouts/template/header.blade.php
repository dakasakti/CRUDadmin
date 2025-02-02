<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Beranda</a>
    
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <button type="submit" class="btn btn-dark border-0 bi bi-arrow-right-square " 
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal" >
                    Sign Out<span data-feather="log-out"></span>
            </button>
        </div>
    </div>
</header>

@include('auth.logout')