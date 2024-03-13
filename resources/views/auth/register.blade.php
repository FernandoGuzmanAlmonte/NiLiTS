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
                    <div class="multisteps-form">
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-4">
                                <div class="card">
                                    <div class="card-header text-center pb-0">
                                        <h3 class="font-weight-bolder mb-0">Crear Cuenta</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="multisteps-form__progress">
                                            <button class="multisteps-form__progress-btn js-active" type="button"
                                                title="Info Personal">
                                                <span>Info Personal</span>
                                            </button>
                                            @if ($role->id === 3)
                                            <button class="multisteps-form__progress-btn" type="button"
                                                title="Info Aspirante">Info Aspirante</button>
                                            @else
                                            <button class="multisteps-form__progress-btn" type="button"
                                                title="Info Tutor">Info Tutor</button>
                                            @endif
                                            <button class="multisteps-form__progress-btn" type="button"
                                                title="Info Dirección">Dirección</button>
                                            <button class="multisteps-form__progress-btn" type="button"
                                                title="Info Acceso">Info Acceso</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--form panels-->
                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto">
                                <form class="multisteps-form__form" role="form" method="POST" aciton="{{ route('register.perform', $role->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder mb-0">Información Personal</h5>
                                        <p class="text-sm mb-0">¿Ya tiene una cuenta?
                                            <a href="{{ route('login') }}" class="text-primary font-weight-bold">
                                                Iniciar Sesión.
                                            </a>
                                        </p>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-3">
                                                    <div class="avatar avatar-xxl position-relative">
                                                        <img src="/assets/img/icons/users/default-avatar.png" class="border-radius-md"
                                                            alt="User photo">
                                                        <a href="javascript:;"
                                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="" aria-hidden="true"
                                                                data-bs-original-title="Edit Image"
                                                                aria-label="Edit Image"></i><span class="sr-only">Edit
                                                                Image</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-9 row mt-4 mt-sm-0 text-start">
                                                    <div class="col-12 col-sm-6">
                                                        <label class="form-label">Tipo de Usuario</label>
                                                        <select name="role" class="form-control mb-3"id="choices-gender" disabled>
                                                            <option value="{{ $role->id }}">
                                                                {{ $role->name }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <label class="form-label">Género</label>
                                                        <select name="gender" class="form-control mb-3"id="choices-gender">
                                                            <option placeholder>-- seleccionar --</option>
                                                            <option value="masculino">
                                                                Masculino
                                                            </option>
                                                            <option value="femenimo">
                                                                Femenino
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <label>Nombre(s)</label>
                                                        <input name="name" class="multisteps-form__input form-control" type="text"
                                                            placeholder="ejem. Fernando" />
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <label>Apellido Paterno</label>
                                                    <input name="first_lastname" class="multisteps-form__input form-control" type="text"
                                                        placeholder="ejem. Guzmán" />
                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <label>Apellido Materno</label>
                                                    <input name="second_lastname" class="multisteps-form__input form-control" type="text"
                                                        placeholder="ejem. Almonte" />  
                                                </div>                                                
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-5 col-5">
                                                    <label class="form-label">Fecha de Nacimiento</label>
                                                    <select class="form-control" name="choices-month" id="choices-month">
                                                        <option value="">Mes</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 col-3">
                                                    <label class="form-label">&nbsp;</label>
                                                    <select class="form-control" name="choices-day" id="choices-day">
                                                        <option value="">Día</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <label class="form-label">&nbsp;</label>
                                                    <select class="form-control" name="choices-year" id="choices-year">
                                                        <option value="">Año</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                                    <label>Teléfono Celular</label>
                                                    <input name="cell_phone" class="multisteps-form__input form-control" type="number"
                                                        placeholder="ejem. 3321995134"/>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <label>Teléfono Fijo</label>
                                                    <input name="landline_phone" class="multisteps-form__input form-control" type="number"
                                                        placeholder="ejem. 3321995134"/>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <label>Teléfono de Contacto Laboral</label>
                                                    <input name="institutional_phone" class="multisteps-form__input form-control" type="number"
                                                        placeholder="ejem. 3321995134"/>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        @if ($role->id === 3)
                                        <h5 class="font-weight-bolder mb-0">Información de Aspirante</h5>
                                        @else
                                        <h5 class="font-weight-bolder mb-0">Información de Tutor</h5>
                                        @endif
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label>Folio de Primer Ingreso</label>
                                                    <input name="school_code" class="multisteps-form__input form-control" type="number"
                                                        placeholder="ejem. 12321312" />
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label>Calendario de Ingreso</label>
                                                    <input name="income_calendar" class="multisteps-form__input form-control" type="text"
                                                        placeholder="ejem. Prior" />
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Anterior</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder mb-0">Dirección</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-7">
                                                    <label>Dirección</label>
                                                    <input name="location" class="multisteps-form__input form-control" type="text"
                                                        placeholder="Ejem. Calle Leonardo da Vinci, 7, 41092" />
                                                </div>
                                                <div class="col-12 col-sm-5 mt-3 mt-sm-0">
                                                    <label>Estado</label>
                                                    <select id="choices-country" name="state" class="form-control">
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
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Anterior</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder mb-0">Información de Acceso</h5>                                        
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label>Correo Electrónico</label>
                                                    <input name="email" class="multisteps-form__input form-control" type="email"
                                                        placeholder="ejem. user@mail.com" />
                                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label>Contraseña</label>
                                                    <input name="password" class="multisteps-form__input form-control" type="password"
                                                        placeholder="******" />
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label>Confirmar Contraseña</label>
                                                    <input class="multisteps-form__input form-control" type="password"
                                                        placeholder="******" />
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Anterior</button>
                                                <button class="btn btn-primary ms-auto mb-0" type="submit"
                                                    title="Send">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.auth.desc-footer')
@endsection

@push('js')
    <script src="../../../assets/js/plugins/multistep-form.js"></script>
    <script src="/assets/js/plugins/choices.min.js"></script>
    
    <script>
        // jkanban init

        (function () {
            let modalToSelectRole = document.getElementById("modal-select-role");
            var newModal = new bootstrap.Modal(modalToSelectRole, {
                            show: true
                        });
            
            newModal.show();
        })();
    </script>

@endpush