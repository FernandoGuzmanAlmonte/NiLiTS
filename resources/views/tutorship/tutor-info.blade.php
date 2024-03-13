@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Tutoría'])
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
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                            <img src="../../assets/img/small-logos/logo-spotify.svg"
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
    <!-- End Navbar -->
    <!-- Routes -->
    <div id="routes" class="d-none">
        <p id="p-update-tutor-students">{{ route('update-tutor-students') }}</p>
        <p id="p-tutor-route">{{ route('dashboards', ['page' => 'tutorship']) }}</p>
    @foreach ($tutors as $tutor)
        <p id="p-tutor-route-{{ $tutor->id }}">{{ route('dashboards', ['page' => 'tutorship', 'tutorId' => $tutor->id]) }}</p>
    @endforeach
    </div>
    <!-- End Routes -->
    <!-- Content -->
    <div class="container-fluid py-4">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-3">                    
                <select id="select-tutor" class="form-control choices-multiple" data-selected-tutor-id="{{ $tutorSelected ? $tutorSelected->id : '' }}">
                    <option value="">Seleccione un tutor...</option>
                    @foreach ($tutors as $tutor)
                        <option 
                            value="{{ $tutor->id }}"
                            {{ ( $tutorSelected && $tutorSelected->id  === $tutor->id) ? 'selected' : '' }}
                        >
                        {{ $tutor->full_name }}                           
                        </option>
                    @endforeach
                </select>
            </div>
            <div id="div-tutor-info" class="col-lg-12">
            @if ( $tutorSelected != null)
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="card  mb-4">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $tutorSelected->full_name }}</p>
                                            <h5 class="font-weight-bolder">
                                                +3,462
                                            </h5>
                                            <p class="mb-0">
                                                <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                                since last quarter
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </div>        
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                <div id="card-tutored-students" class="card h-100 ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-5">
                                <h5 class="mb-0 text-capitalize">Tutelados</h5>
                            </div>    
                        </div>                        
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-group list-group-flush">
                            @foreach($tutoredStudents as $tutoredStudent)
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto d-flex align-items-center">
                                        <a href="javascript:;" class="avatar">
                                            <img 
                                                class="border-radius-lg" 
                                                alt="Student Photo"
                                                src="{{ '/assets/img/' . $tutoredStudent->avatar }}"
                                            >
                                        </a>
                                    </div>
                                    <div class="col ml-2">
                                        <h6 class="mb-0">
                                            <a href="javascript:;">{{ $tutoredStudent->full_name }}</a>
                                        </h6>
                                        <span title="Calendario de Ingreso" class="badge badge-primary badge-sm">
                                            {{ $tutoredStudent->income_calendar }}
                                        </span>
                                        @if ($tutoredStudent->last_module_finished)
                                        <span title="Ultimo modulo terminado" class="badge badge-success badge-sm">
                                            {{ $tutoredStudent->last_module_finished }}
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <button 
                                            id="btn-remove-tutored-student-{{ $tutoredStudent->id }}"
                                            data-student-id="{{ $tutoredStudent->id }}"
                                            class="btn btn-danger text-sm btn-xs text-uppercase mb-0"
                                            type="button"
                                        >
                                            Remover
                                        </button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @if ($tutoredStudents)
                    <div class="card-footer ms-auto me-auto pt-0">
                        {{  $tutoredStudents->links() }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                <div id="card-students-whithout-tutor" class="card h-100 ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-5">
                                <h5 class="mb-0 text-capitalize">Alumnos Sin Tutor</h5>
                            </div>    
                            <div class="col-7">
                                <div class="d-flex align-items-end">
                                    <div class="input-group">
                                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Escriba el nombre del alumno...">
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-group list-group-flush">
                            @foreach($studentsWhithoutTutor as $studentWithoutTutor)
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto d-flex align-items-center">
                                        <a href="javascript:;" class="avatar">
                                            <img 
                                                class="border-radius-lg" 
                                                alt="Student Photo"
                                                src="{{ '/assets/img/' . $studentWithoutTutor->avatar }}"
                                            >
                                        </a>
                                    </div>
                                    <div class="col ml-2">
                                        <h6 class="mb-0">
                                            <a href="javascript:;">{{ $studentWithoutTutor->full_name }}</a>
                                        </h6>
                                        <span class="badge badge-success badge-sm">Online</span>
                                    </div>
                                    <div class="col-auto">
                                        <button 
                                            id="btn-add-tutored-student-{{ $studentWithoutTutor->id }}" 
                                            data-student-id="{{ $studentWithoutTutor->id }}"
                                            class="btn btn-success btn-xs text-sm text-uppercase mb-0"
                                            type="button"
                                        >
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer ms-auto me-auto pt-0">
                        {{ $studentsWhithoutTutor->links() }}
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
    <!-- End Content -->
@endsection

@push('js')
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script>
        function initializeButtonsForTutoredStudents() {
            $('button[id^="btn-remove-tutored-student"]').on('click', function () {
                let studentId = $(this).attr('data-student-id');
                
                modifyTutoredStudent(studentId, "remove");
            });
            
            $('button[id^="btn-add-tutored-student"]').on('click', function () {
                let studentId = $(this).attr('data-student-id');
                
                modifyTutoredStudent(studentId, "add");
            });
        }

        function modifyTutoredStudent (studentId, actionToDo) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                }
            });
            console.log(studentId, actionToDo);
            $.ajax({
                url: $("#p-update-tutor-students").text(),
                type: 'POST',
                data: {
                    studentId: studentId,
                    actionToDo: actionToDo,
                    tutorId: $("#select-tutor").attr("data-selected-tutor-id")
                },
                dataType: 'html'
            }).done(function (response) {
                if (response) {
                    let tutoredStudentsHtml = $(response).find('#card-tutored-students').html();
                    let studentsWhithoutTutorHtml = $(response).find('#card-students-whithout-tutor').html();

                    $('#card-tutored-students').html(tutoredStudentsHtml);
                    $('#card-students-whithout-tutor').html(studentsWhithoutTutorHtml);

                    initializeButtonsForTutoredStudents();
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
                console.log(jqXHR.responseText);
            });
        }

        $(document).ready(function() {
            const CHOICE_TUTOR = new Choices(document.querySelector('#select-tutor'));
            
            initializeButtonsForTutoredStudents();

            $('#select-tutor').on('change', function (e) {
                let route = $(`#routes #p-tutor-route${this.value ? "-" + this.value : ""}`).text();
                $("#select-tutor").attr("data-selected-tutor-id", this.value);
                
                $(location).attr('href', route);
            });
        });
    </script>
@endpush
