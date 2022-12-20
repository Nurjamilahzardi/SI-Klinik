<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('index') ? 'active' : '' }}" aria-current="page" href="index">
                    <i class="fa-solid fa-hospital"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dokterdashboard') ? 'active' : '' }}" href="/dokterdashboard">
                    <i class="fa-solid fa-user-doctor"></i>
                    Dokter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('perawatdashboard') ? 'active' : '' }}" href="/perawatdashboard">
                    <i class="fa-solid fa-user-nurse"></i>
                    Perawat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pasiendashboard') ? 'active' : '' }}" href="/pasiendashboard">
                    <i class="fa-solid fa-users"></i>
                    Pasien
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('obatdashboard') ? 'active' : '' }}" href="/obatdashboard">
                    <i class="fa-solid fa-pills"></i>
                    Obat
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('ruangandashboard') ? 'active' : '' }}" href="/ruangandashboard">
                    <i class="fa-solid fa-house-medical"></i>
                    Ruangan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('poliklinikdashboard') ? 'active' : '' }}"
                    href="/poliklinikdashboard">
                    <i class="fa-solid fa-id-card-clip"></i>
                    Poliklinik
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pembayarandashboard') ? 'active' : '' }}"
                    href="/pembayarandashboard">
                    <i class="fa-solid fa-receipt"></i>
                    Pembayaran
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Contact Us</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="https://mail.google.com/bajrulhakimi04@gmail.com">
                    <span data-feather="paperclip" class="align-text-bottom"></span>
                    https://klinikk2.ac.id
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://mail.google.com/bajrulhakimi04@gmail.com">
                    <span data-feather="mail" class="align-text-bottom"></span>
                    klinikk2@gmail.ac.id
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="phone-call" class="align-text-bottom"></span>
                    +622387901257
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="instagram" class="align-text-bottom"></span>
                    @klinikkelompok2
                </a>
            </li>
        </ul>
    </div>
</nav>
