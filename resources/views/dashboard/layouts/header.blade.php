<header class="navbar navbar-secondary sticky-top bg-primary flex-md-nowrap p-0 ">
    <a class="navbar-brand navbar-secondary col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Sistem Informasi
        KLINIK</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">

        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button class="btn " type="submit"><i class="fas fa-sign-out-alt"></i> Sign Out</button>
            </form>
        </div>
    </div>
</header>
