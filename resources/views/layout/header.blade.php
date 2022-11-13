<header>
    <!-- Fixed navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Informasi KLINIK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#">Perawat</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="/ruangan">Ruangan</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="/pembayaran">Pembayaran</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link " href="/#">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/#">Poliklinik</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    @auth
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-dark" type="submit"><i class="fas fa-sign-out-alt"></i>
                                    Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</header>
