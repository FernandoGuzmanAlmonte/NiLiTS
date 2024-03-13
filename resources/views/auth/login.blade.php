@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.topnav', [
        'classes' => 'top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4',
        'container' => 'container',
        'text' => 'text-white',
        'arrow' => '/assets/img/down-arrow-white.svg',
    ])
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-7 pb-9 m-3 border-radius-lg"
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
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mt-5">
                        <div class="card-header pb-0 text-start">
                            <h3 class="font-weight-bolder">Inicio de Sesión</h3>
                            <p class="mb-0">Ingrese su correo y contraseña.</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('login.perform') }}" class="text-start">
                                @csrf
                                <label>Correo electrónico</label>
                                <div class="mb-3">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" aria-label="Email">
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <label>Contraseña</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" aria-label="Password">
                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                    <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-1 text-sm mx-auto">
                                ¿Olvidó su contraseña? Restablezca su contraseña
                                <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">aquí.</a>
                            </p>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                ¿No tiene una cuenta?
                                <a href="{{ route('register-select-role') }}" class="text-primary font-weight-bold">Cree una.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.auth.desc-footer')
@endsection
