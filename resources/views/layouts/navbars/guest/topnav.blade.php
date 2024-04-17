<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute {{ $classes }}">
    <div class="{{ $container ?? 'container-fluid'}} ps-2 pe-0">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ $text ?? ''}}"
            href="/default">
            Nivelacion a la Lincenciatura en Trabajo Social - CUCSH
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 justify-content-end" id="navigation">
            <ul class="navbar-nav navbar-nav-hover  align-items-center">
                <li class="nav-item">
                    <a href="{{ route('login') }}"
                        class="nav-link cursor-pointer mb-0 me-1">
                        Iniciar Sesión
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register-select-role') }}"
                        class="btn btn-sm  btn-primary  mb-0 me-1">
                        Crear Cuenta
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
