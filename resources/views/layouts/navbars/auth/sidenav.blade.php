<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2
    {{ $bg ?? ''}} {{ $box ?? ''}}"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href="{{ route('dashboards', ['page' => 'default']) }}">
            <img src="{{ $logo ?? '/assets/img/logo-ct-dark.png'}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">NiLiTS</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('user-profile') }}" class="nav-link {{ str_contains(request()->url(), 'user-profile') == true ? 'active' : '' }}"
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mi Perfil</span>
                </a>
                <!-- <div class="collapse {{ str_contains(request()->url(), 'pages') == true ? 'show' : '' }}" id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="{{ route('user-profile') }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> Editar Perfil </span>
                            </a>
                        </li>                
                    </ul>
                </div> -->
            </li>
            @if (auth()->user()->isAdmin())
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">GESTIÓN</h6>
            </li>
            @endif
            @if (auth()->user()->isAdmin())
            <li class="nav-item">
                <a href="{{ route('user-management', 3) }}" class="nav-link {{ str_contains(Request::fullUrl(), 'user-management?3') == true ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Aspirantes</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->isAdmin() || auth()->user()->isTutor())
            <li class="nav-item">
                <a href="{{ route('user-management', 4) }}" class="nav-link {{ str_contains(Request::fullUrl(), 'user-management?4') == true ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Alumnos</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->isAdmin())
            <li class="nav-item">
                <a href="{{ route('user-management', 2) }}" class="nav-link {{ str_contains(Request::fullUrl(), 'user-management?2') == true ? 'active' : '' }}"
                    aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Asesores</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->isAdmin())
            <li class="nav-item">
                <a href="{{ route('user-management', 1) }}" 
                    class="nav-link {{ str_contains(Request::fullUrl(), 'user-management?1') == true ? 'active' : '' }}"
                    aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Administradores</span>
                </a>
            </li>
            @endif
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">SECCIONES</h6>
            </li>
            @if (auth()->user()->isAdmin() || auth()->user()->isStudent())
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link {{ str_contains(request()->url(), 'authentication') == true ? 'active' : '' }}" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tutoría</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link {{ str_contains(request()->url(), 'authentication') == true ? 'active' : '' }}" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Normatividad</span>
                </a>
            </li>
            @if (auth()->user()->isAdmin() || auth()->user()->isStudent())
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link {{ str_contains(request()->url(), 'authentication') == true ? 'active' : '' }}" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Numeralia</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('user-profile') }}" class="nav-link {{ str_contains(request()->url(), 'zxzxzx') == true ? 'active' : '' }}"
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Aviso de Privacidad</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 my-3">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-60 mx-auto" src="/assets/img/illustrations/icon-documentation-warning.svg"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">¿Necesitas ayuda?</h6>
                    <p class="text-xs font-weight-bold mb-0">Por favor revisa nuestras:</p>
                </div>
            </div>
        </div>
        <a href="/" target="_blank"
            class="btn  btn-primary btn-sm w-100 mb-3">Preguntas frecuentes</a>
        <a class="btn btn-dark btn-sm mb-0 w-100"
            href="/" type="button" target="_blank">No se encuentra mi problema</a>
    </div>
</aside>
