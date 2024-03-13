@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
        @if ($role->id == 1)
            @include('layouts.navbars.auth.topnav', ['title' => 'Gestión de Administradores'])
        @elseif ($role->id == 2)
            @include('layouts.navbars.auth.topnav', ['title' => 'Gestión de Asesores'])
        @elseif ($role->id == 3)
            @include('layouts.navbars.auth.topnav', ['title' => 'Gestión de Aspirantes'])
        @elseif ($role->id == 4)
            @include('layouts.navbars.auth.topnav', ['title' => 'Gestión de Alumnos'])
        @endif
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('auth.logout')
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item position-relative pe-2 d-flex align-items-center">
                        <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="#">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="#">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="/assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="#">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
            @if ($role->id == 1)
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Administradores</h5>
                        <a href="{{ route('user-new') }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Agregar Administrador</a>
                    </div>
                    <div class="px-4" id="alert">
                        @include('components.alert')
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Paterno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Materno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Folio de Primer Ingreso
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Correo Electrónico
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->role->id === 1)
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ '/assets/img' . $user->avatar }}" class="avatar me-3"
                                                        alt="user image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ $user->first_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->second_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->school_code }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                                        <td class="text-sm">
                                            <span class="d-flex">
                                                @can('update', $user)
                                                    <a href="{{ route('user-edit', $user->id) }}" class="me-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete', $user)
                                                    <form action="{{ route('user-destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        <button
                                                            onclick="confirm('Are you sure you want to remove the tag?') || event.stopImmediatePropagation()"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete user"
                                                            class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif ($role->id == 2)
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Asesores</h5>
                        <a href="{{ route('user-new') }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Agregar Asesor</a>
                    </div>
                    <div class="px-4" id="alert">
                        @include('components.alert')
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Paterno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Materno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Folio de Primer Ingreso
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Correo Electrónico
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->role->id === 2)
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ '/assets/img' . $user->avatar }}" class="avatar me-3"
                                                        alt="user image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ $user->first_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->second_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->school_code }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                                        <td class="text-sm">
                                            <span class="d-flex">
                                                @can('update', $user)
                                                    <a href="{{ route('user-edit', $user->id) }}" class="me-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete', $user)
                                                    <form action="{{ route('user-destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        <button
                                                            onclick="confirm('Are you sure you want to remove the tag?') || event.stopImmediatePropagation()"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete user"
                                                            class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif ($role->id == 3)
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Aspirantes</h5>
                        <a href="{{ route('user-new') }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Agregar Aspirante</a>
                    </div>
                    <div class="px-4" id="alert">
                        @include('components.alert')
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Paterno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Apellido Materno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Folio de Primer Ingreso
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Correo Electrónico
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->role->id === 3)
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ '/assets/img' . $user->avatar }}" class="avatar me-3"
                                                        alt="user image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ $user->first_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->second_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->school_code }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                                        <td class="text-sm">
                                            <span class="d-flex">
                                                @can('update', $user)
                                                    <a href="{{ route('user-edit', $user->id) }}" class="me-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete', $user)
                                                    <form action="{{ route('user-destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        <button
                                                            onclick="confirm('Are you sure you want to remove the tag?') || event.stopImmediatePropagation()"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete user"
                                                            class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif ($role->id == 4)
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <h5 class="mb-0">Alumnos</h5>
                                <a href="{{ route('user-new') }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Agregar Alumno</a>
                            </div>
                            <div class="col-12 mt-1">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="row col-12">
                                            <strong class="text-xs font-weight-normal">Búsqueda</strong>
                                            <hr class="mb-1 mt-0 d-block w-90">
                                            <div class="col-auto mt-1" style="padding-right: 0px">
                                                <div class="dropdown">
                                                    <button class="btn bg-gradient-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Nombre
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="javascript:;">Nombre</a></li>                                    
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-8 px-0 mt-1">
                                                <select id="select-student" class="form-control">
                                                    <option value="">Seleccione un estudiante...</option>
                                                    <option value="fer">Fernando Guzman Almonte</option>
                                                </select>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-5">
                                        <strong class="text-xs font-weight-normal">Filtros</strong>
                                        <hr class="mb-1 mt-0 d-block w-90">
                                        <div class="col-12 px-0 mt-1">
                                            <select id="select-state" class="form-control choices-multiple" multiple>
                                                <option value="a">Activos</option>
                                                <option value="b">De Baja</option>
                                                <option value="c">Titulados</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4" id="alert">
                        @include('components.alert')
                    </div>
                    <div class="table-responsive px-2">
                        <table class="table align-items-center mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Código
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Apellido Paterno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Apellido Materno
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tutor
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Estatus
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Dictamen
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Correo Institucional
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->role->id === 4)
                                    <tr>
                                        <td class="text-sm font-weight-normal">{{ $user->school_code }}</td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ '/assets/img' . $user->avatar }}" class="avatar me-3"
                                                        alt="user image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ $user->first_lastname }}</td>
                                        <td class="text-sm font-weight-normal">{{ $user->second_lastname }}</td>
                                        <td class="text-sm font-weight-normal">
                                            @if($user->tutor)
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ '/assets/img' . $user->tutor->avatar }}" class="avatar me-3"
                                                        alt="user image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    {{ $user->tutor->name }}
                                                    <p class="mb-0 text-xs">
                                                        {{ $user->tutor->first_lastname }} {{ $user->tutor->second_lastname }}
                                                    </p>
                                                </div>
                                                
                                            </div>
                                            @endif
                                        </td>
                                        <td class="text-sm font-weight-bold text-uppercase">
                                            @if ($user->status == 'activo')
                                            <span class="badge badge-md bg-gradient-success">
                                                {{ $user->status }}
                                            </span>
                                            @elseif ($user->status == 'baja')
                                            <span class="badge badge-md bg-gradient-danger">
                                                {{ $user->status }}
                                            </span>
                                            @elseif ($user->status == 'titulado')
                                            <span class="badge badge-md bg-gradient-info">
                                                {{ $user->status }}
                                            </span>
                                            @endif
                                        </td>
                                        <td class="text-sm font-weight-normal">20</td>
                                        <td class="text-sm font-weight-normal">{{ $user->institutional_email }}</td>
                                        <td class="text-sm">
                                            <span class="d-flex">
                                                @can('update', $user)
                                                    <a href="{{ route('user-edit', $user->id) }}" class="me-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete', $user)
                                                    <form action="{{ route('user-destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        <button
                                                            onclick="confirm('Are you sure you want to remove the tag?') || event.stopImmediatePropagation()"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete user"
                                                            class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script>
        $(document).ready(function() {
            const CHOICE_STUDENT = new Choices(document.querySelector('#select-student'));
            const CHOICE_SATE = new Choices(document.querySelector('#select-state'), {
                removeItemButton: true
            });
        });
    </script>
@endpush
