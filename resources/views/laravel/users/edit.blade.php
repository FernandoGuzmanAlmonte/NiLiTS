@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl ">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Editar Usuario'])
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
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                <a class="dropdown-item border-radius-md" href="javascript:;">
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
                                <a class="dropdown-item border-radius-md" href="javascript:;">
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
    <div class="container-fluid my-5 py-2">
        <div class="row mb-5">
            <div class="col-lg-3">
                <div class="card position-sticky top-1">
                    <ul class="nav flex-column bg-white border-radius-lg p-3">
                        <li class="nav-item">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#profile">
                                <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Perfil</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#basic-info">
                                <i class="ni ni-books me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Inf. Básica</span>
                            </a>
                        </li>
                    @if ($user->isStudent() || $user->isAspirant())
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#student-info">
                                <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                                <span class="text-sm">{{ $user->isAspirant() ? 'Inf. de Aspirante': 'Inf. de Alumno' }}</span>
                            </a>
                        </li>
                    @endif
                    @if ($user->isStudent())
                        @if ($user->status == 'titulado')
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#graduation-info">
                                <i class="ni ni-bell-55 me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Egreso / Titulación</span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#social-service">
                                <i class="ni ni-watch-time me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Servicio Social</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#grades">
                                <i class="ni ni-settings-gear-65 me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Calificaciones</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->isAdmin())
                        <li class="nav-item pt-2">
                            <a class="nav-link text-body d-flex align-items-center" data-scroll="" href="#save-changes">
                                <i class="ni ni-settings-gear-65 me-2 text-dark opacity-6"></i>
                                <span class="text-sm">Guardar Cambios</span>
                            </a>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">
                <form method="POST" action="{{ route('user-edit.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Card Profile -->
                    <div class="card card-body" id="profile">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-auto col-4">
                                <div class="avatar avatar-xl position-relative">
                                    <div>
                                        <label for="file-input"
                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                aria-hidden="true" data-bs-original-title="Edit Image"
                                                aria-label="Edit Image"></i>
                                            <span class="sr-only">Edit Image</span>
                                        </label>

                                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <img src="{{ '/assets/img' . $user->avatar }}" alt="bruce"
                                                class="w-100 border-radius-lg shadow-sm">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        {{ $user->name ?? '' }}
                                        {{ $user->first_lastname ?? '' }}
                                        {{ $user->second_lastname ?? '' }}
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        {{ $user->role->name ?? '' }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                @if (auth()->user()->isAdmin() && $user->isAspirant())
                                <label class="form-check-label mb-0">
                                    <small id="profileVisibility">
                                        Cambiar a Alumno
                                    </small>
                                </label>
                                <div class="form-check form-switch ms-2">
                                    <input id="flexSwitchCheckDefault23" data-checked="false" class="form-check-input" 
                                        type="checkbox" onchange="visible()">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>       
                    <!-- Card Basic Info -->
                    <div class="card mt-4" id="basic-info">
                        <div class="card-header">
                            <h5>Información Básica</h5>
                        </div>
                        <div class="card-body pt-0">
                            <input type="file" name="avatar" id="file-input" accept="image/*" class="d-none">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    @if (auth()->user()->isAdmin())
                                    <input id="input-role" name="role" type="hidden" value="{{ $user->role_id }}">
                                    @endif
                                    <label class="form-label">Género</label>
                                    <select name="gender" class="form-control mb-3" id="choices-gender"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}>
                                        <option value="masculino" {{ $user->gender == 'masculino' ? 'selected': '' }}>
                                            Masculino
                                        </option>
                                        <option value="femenimo" {{ $user->gender == 'femenimo' ? 'selected': '' }}>
                                            Femenino
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label>Nombre(s)</label>
                                    <input name="name" class="multisteps-form__input form-control" type="text" 
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->name }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <label class="mt-4">Apellido Paterno</label>
                                            <input name="first_lastname" class="multisteps-form__input form-control" type="text"
                                                {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                value="{{ $user->first_lastname }}" />
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <label class="mt-4">Apellido Materno</label>
                                            <input name="second_lastname" class="multisteps-form__input form-control" type="text"
                                                {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                value="{{ $user->second_lastname }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-5 col-5">
                                            <label class="form-label mt-4">Fecha de Nacimiento</label>
                                            <select class="form-control" name="choices-month" id="choices-month">
                                                <option value="">Mes</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-3">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <select class="form-control" name="choices-day" id="choices-day">
                                                <option value="">Día</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 col-4">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <select class="form-control" name="choices-year" id="choices-year">
                                                <option value="">Año</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-label mt-4">Teléfono Celular</label>
                                    <input name="cell_phone" class="multisteps-form__input form-control" type="number"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->cell_phone }}" />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="form-label mt-4">Teléfono Fijo</label>
                                    <input name="landline_phone" class="multisteps-form__input form-control" type="number"
                                        value="{{ $user->landline_phone }}"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <div class="col-12 col-sm-12">
                                        <label class="mt-4">Correo Electrónico</label>
                                        <input name="email" class="multisteps-form__input form-control" type="email"
                                            {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                            value="{{ $user->email }}" />
                                        @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-7">
                                    <label class="form-label mt-4">Dirección</label>
                                    <input name="location" class="multisteps-form__input form-control" type="text"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->location }}"/>
                                </div>
                                <div class="col-12 col-sm-5 mt-3 mt-sm-0">
                                    <label class="form-label mt-4">Estado</label>
                                    <select id="choices-country" name="state" class="form-control" {{ !auth()->user()->isAdmin() ? 'disabled': '' }}>
                                        <option selected>{{ $user->state }}</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacan">Michoacan</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo Leon">Nuevo Leon</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Queretaro">Queretaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosi">San Luis Potosi</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatan">Yucatan</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Ciudad de México">Ciudad de México</option>
                                    </select>
                                </div>
                            </div>
                            @if (auth()->user()->isAdmin())
                            <div class="row">
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-label mt-4">Fecha de Creación de Usuario</label>
                                    <input name="created_at" class="multisteps-form__input form-control" type="text"
                                        value="{{ auth()->user()->created_at }}" disabled/>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-label mt-4">Fecha de la Última Modificación</label>
                                    <input name="created_at" class="multisteps-form__input form-control" type="text"
                                        value="{{ $user->updated_at }}" disabled/>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if ($user->isStudent() || $user->isAspirant())
                    <!-- Card Student Info -->
                    <div class="card mt-3" id="student-info">
                        <div class="card-header">
                            <h5>{{ $user->isAspirant() ? 'Información de Aspirante': 'Información de Alumno' }}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label class="form-label">{{ $user->isAspirant() ? 'Folio de Primer Ingreso': 'Código' }}</label>
                                    <input name="school_code" class="multisteps-form__input form-control" type="number"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->school_code }}"/>
                                </div>
                                @if ($user->isStudent())
                                <div class="col-6">
                                    <label class="form-label">Correo Institucional</label>
                                    <div class="input-group">
                                        <input name="institutional_email" class="multisteps-form__input form-control" type="email"
                                            {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                            value="{{ $user->institutional_email }}"/>
                                    </div>
                                    @error('confirmation')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                @endif
                            </div>
                            <div class="row mt">
                                <div class="col-12 col-sm-7">
                                    <label class="form-label mt-4">Teléfono de Contacto Laboral</label>
                                    <input name="institutional_phone" class="multisteps-form__input form-control" type="number"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->institutional_phone }}" />
                                </div>
                                <div class="col-12 col-sm-5 mt-3 mt-sm-0">
                                    <label class="form-label mt-4">Calendario de Ingreso</label>
                                    <input name="income_calendar" class="multisteps-form__input form-control" type="text"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->income_calendar }}"/>
                                </div>
                            </div>
                            @if ($user->isStudent())
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <label class="form-label">Estatus</label>
                                    <select id="choices-role" name="status" class="form-control mb-3"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}>
                                        <option value="activo" {{ $user->status == 'activo' ? 'selected': '' }}>
                                            Activo
                                        </option>
                                        <option value="egresado" {{ $user->status == 'egresado' ? 'selected': '' }}>
                                            Egresado
                                        </option>
                                        <option value="titulado" {{ $user->status == 'titulado' ? 'selected': '' }}>
                                            Titulado
                                        </option>
                                        <option value="baja" {{ $user->status == 'baja' ? 'selected': '' }}>
                                            Baja
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <label class="form-label">Tutor</label>
                                    <select
                                        id="choices-tutor" 
                                        name="tutor_id" 
                                        class="form-control mb-3"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                    >
                                        <option></option>
                                    @foreach ($tutors as $tutor)
                                        <option 
                                            value={{ $tutor->id }}
                                            {{ $user->tutor->id ?? false == $tutor->id ? 'selected': '' }}
                                        >
                                            {{ $tutor->name }}
                                            {{ $tutor->first_lastname }}
                                            {{ $tutor->second_lastname }}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                @if ($user->isStudent())
                    @if ($user->status == 'titulado')
                    <!-- Card Graduation Info -->
                    <div class="card mt-4" id="graduation-info">
                        <div class="card-header">
                            <h5>Egreso y Titulación</h5>
                            <!-- <p class="text-sm">Here you can setup and manage your integration settings.</p> -->
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Modalidad de Titulación</label>
                                    <select 
                                        id="choices-graduation-mode" 
                                        name="graduation_mode" 
                                        class="form-control mb-3"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                    >
                                        <option></option>
                                        <option
                                            value="thesis"
                                            {{ $user->graduation_mode == 'thesis' ? 'selected': '' }}
                                        >
                                            Tesis
                                        </option>
                                        <option 
                                            value="comprehensive_theoretical_exam"
                                            {{ $user->graduation_mode == 'comprehensive_theoretical_exam' ? 'selected': '' }}
                                        >
                                            Examen global teórico
                                        </option>
                                        <option 
                                            value="ceneval"
                                            {{ $user->graduation_mode == 'ceneval' ? 'selected': '' }}
                                        >
                                            Examen general de certificación profesional (CENEVAL)
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Director</label>
                                    <select 
                                        id="director"
                                        name="director_id"
                                        class="form-control mb-3"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                    >
                                    <option ></option>
                                    @foreach ($directors as $director)
                                        <option
                                            value={{ $director->id }}
                                            {{ $user->director->id ?? false == $director->id ? 'selected': '' }}
                                        >
                                            {{ $director->name }}
                                            {{ $director->first_lastname }}
                                            {{ $director->second_lastname }} 
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Libro de Acta</label>
                                    <input 
                                        name="certificate_book" 
                                        class="multisteps-form__input form-control" 
                                        type="text"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->certificate_book }}"
                                    />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Número de Acta</label>
                                    <input 
                                        name="act_number" 
                                        class="multisteps-form__input form-control" 
                                        type="number"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                        value="{{ $user->act_number }}"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Calendario de Egreso</label>
                                    <input 
                                        name="graduation_calendar" 
                                        class="multisteps-form__input form-control" 
                                        value="{{ $user->graduation_calendar }}"
                                        type="text"
                                        {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- Card Social Service -->
                    <div class="card mt-4" id="social-service">
                        <div class="card-header">
                            <h5>Servicio Social</h5>
                            <!-- <p class="text-sm">Choose how you receive notifications. These notification settings
                                apply to the things you’re watching.</p> -->
                        </div>
                        <div class="card-body pt-0">
                        </div>
                    </div>
                    <!-- Card Grades -->
                    <div class="card mt-4" id="grades">
                        <div class="card-header pb-3">
                            <h5>Calificaciones</h5>
                            <!-- <p class="text-sm">This is a list of devices that have logged into your account.
                                Remove those that you do not recognize.</p> -->
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-flush text-center" id="datatable-basic">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Módulo
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Calificación
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                1
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_one"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_one }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                2
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_two"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_two }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                3
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_three"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_three }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                4
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_four"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_four }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                5
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_five"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_five }}"
                                                />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                6
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_six"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_six }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                7
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_seven"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_seven }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                8
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_eight"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_eight }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                9
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_nine"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_nine }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                10
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_ten"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_ten }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                11
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_eleven"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_eleven }}"
                                                />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal text-center">
                                                12
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <input
                                                    name="module_twelve"
                                                    type="number" 
                                                    class="form-control text-center" 
                                                    placeholder="Ingrese una califcación..."
                                                    {{ !auth()->user()->isAdmin() ? 'disabled': '' }}
                                                    value="{{ $user->module_twelve }}"
                                                />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->isAdmin())
                    <!-- Save Changes -->
                    <div class="card mt-4" id="save-changes">
                        <div class="card-header pb-3">
                            <h5>Guardar Cambios</h5>
                        </div>
                        <div class="card-body pt-0">
                            <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Actualizar</button>
                        </div>
                    </div>
                @endif
                </form>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('css')
    <style>
        .choices {
            margin-bottom: 0;
        }

    </style>
@endpush

@push('js')
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script>
        var birthdayArray = <?php echo !empty($birthdayArray) ? json_encode($birthdayArray) : '"0"'; ?>;
        var selectedYear = birthdayArray["year"];
        var selectedMonth = Math.floor(birthdayArray["month"]);
        var selectedDay = birthdayArray["day"];
        
        if (document.getElementById('choices-gender')) {
            var gender = document.getElementById('choices-gender');
            const example = new Choices(gender);
        }

        if (document.getElementById('choices-role')) {
            var role = document.getElementById('choices-role');
            const example = new Choices(role);
        }

        // if (document.getElementById('choices-status')) {
        //     var status = document.getElementById('choices-status');
        //     const example = new Choices(status);
        //     const example = new Choices(status, {
        //         removeItemButton: true,
        //     });
        // }

        if (document.getElementById('choices-year')) {
            var year = document.getElementById('choices-year');
            setTimeout(function() {
                const example = new Choices(year);
            }, 1);

            for (y = 1900; y <= 2020; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;
                if (selectedYear > 0) {
                    if (y == selectedYear) {
                        optn.selected = true;
                    }
                }

                year.options.add(optn);
            }
        }

        if (document.getElementById('choices-day')) {
            var day = document.getElementById('choices-day');
            setTimeout(function() {
                const example = new Choices(day);
            }, 1);


            for (y = 1; y <= 31; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (selectedDay > 0) {
                    if (y == selectedDay) {
                        optn.selected = true;
                    }
                }

                day.options.add(optn);
            }

        }

        if (document.getElementById('choices-month')) {
            var month = document.getElementById('choices-month');
            setTimeout(function() {
                const example = new Choices(month);
            }, 1);

            var d = new Date();
            var monthArray = new Array();
            monthArray[0] = "Enero";
            monthArray[1] = "Febrero";
            monthArray[2] = "Marzo";
            monthArray[3] = "Abril";
            monthArray[4] = "Mayo";
            monthArray[5] = "Junio";
            monthArray[6] = "Julio";
            monthArray[7] = "Agosto";
            monthArray[8] = "Septiembre";
            monthArray[9] = "Octubre";
            monthArray[10] = "Noviembre";
            monthArray[11] = "Diciembre";
            for (m = 0; m <= 11; m++) {
                var optn = document.createElement("OPTION");
                optn.text = monthArray[m];
                // server side month start from one
                optn.value = (m + 1);
                // if june selected
                if (selectedMonth > 0) {
                    if (optn.value == selectedMonth) {
                        optn.selected = true;
                    }
                }
                month.options.add(optn);
            }
        }

        function visible() {
            let elem = document.getElementById('flexSwitchCheckDefault23');
            let roleInput = document.getElementById('input-role');

            if (elem) {
                if (elem.dataset.checked === "false") {
                    elem.dataset.checked = "true"
                    roleInput.value = "4"
                } else {
                    elem.dataset.checked = "false"
                    roleInput.value = "3"
                }
            }
        }

        var openFile = function(event) {
            var input = event.target;

            // Instantiate FileReader
            var reader = new FileReader();
            reader.onload = function() {
                imageFile = reader.result;

                document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                    '" class="rounded-circle w-100 shadow" />';
            };
            reader.readAsDataURL(input.files[0]);
        };
    </script>
@endpush
