@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.topnav', [
        'classes' => 'top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4',
        'container' => 'container',
        'text' => 'text-white',
        'arrow' => '/assets/img/down-arrow-white.svg',
    ])

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 mb-0 border-radius-lg"
            style="background-image: url('http://www.cenlinea.cucsh.udg.mx/pluginfile.php/375348/course/overviewfiles/HEADERmooveCOVER.JPG');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">BIENVENIDO A</h1>
                        <h1 class="text-white mb-2">NiLiTS!</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-12 mx-auto">
                    <div class="card h-100 p-3">
                        <div class="card-header">
                            <div class="row text-center">
                                <div class="col-10 mx-auto">
                                    <h5 class="font-weight-normal"><b>TIPOS DE USUARIO</b></h5>
                                    <p>
                                        Seleccione el tipo de usuario con el que se registrará en el sistema
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form id="form-select-role" role="form" method="GET">
                                <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-center">
                                                    <input type="checkbox" class="btn-check" id="input-aspirant" data-url="{{ url('register', $aspirantRole->id) }}">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="input-aspirant">
                                                        <img src="/assets/img/icons/users/aspirant-icon.png" width="50px" height="50px" alt="User photo">
                                                    </label>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-center">
                                                    <h6>Aspirante</h6>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-center">
                                                    <input type="checkbox" class="btn-check" id="input-tutor" data-url="{{ url('register', $tutorRole->id) }}">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="input-tutor">
                                                        <img src="/assets/img/icons/users/tutor-icon.png" width="50px" height="50px" alt="User photo">
                                                    </label>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-center">
                                                    <h6>Tutor</h6>   
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button id="button-accept-selected-role" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" 
                                        type="button" title="Accept">
                                        ACEPTAR
                                    </button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.auth.desc-footer')
@endsection

@push('js')
    <script>
        function getSelectedRoleUrl () {
            let checkboxAspirantRole = document.getElementById("input-aspirant");
            let checkboxTutorRole = document.getElementById("input-tutor");
            let selectedRoleId = false;
            
            if (checkboxTutorRole.checked) {
                selectedRoleId = checkboxTutorRole.getAttribute('data-url');
            } else if (checkboxAspirantRole.checked) {
                selectedRoleId = checkboxAspirantRole.getAttribute('data-url');
            }
            
            return selectedRoleId;
        }

        let buttonAcceptSelectedRole = document.getElementById("button-accept-selected-role");
        
        buttonAcceptSelectedRole.onclick = function () {
            let selectRoleForm = document.getElementById("form-select-role");
            let selectedRoleUrl = getSelectedRoleUrl();
            
            selectRoleForm.setAttribute("action", selectedRoleUrl);
            selectRoleForm.submit();
        }
    </script>

@endpush