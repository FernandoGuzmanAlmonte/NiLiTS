<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\TutorshipController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;



Route::get('/', function () {
	return redirect('/user-profile');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::get('/register', [RegisterController::class, 'selectRole'])->middleware('guest')->name('register-select-role');
Route::get('/register/{role}', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::put('/register/{role}', [RegisterController::class, 'register'])->middleware('guest')->name('register.perform');

Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');

Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user-profile', [ProfileController::class, 'show'])->name('user-profile');
    Route::post('/user-profile', [ProfileController::class, 'update'])->name('user-profile.perform');

    Route::controller(UserController::class)->group(function() {
        Route::get('/user-management/{id}', 'index')->name('user-management');
        Route::get('/user-management/new', 'create')->name('user-new');
        Route::post('/user-management/new', 'store')->name('user-new.store');
        Route::get('/user-management/edit/{id}', 'edit')->name('user-edit');
        Route::post('/user-management/edit/{id}', 'update')->name('user-edit.update');
        Route::post('/user-delete/{id}', 'destroy')->name('user-destroy');
    });

    Route::controller(RoleController::class)->group(function() {
        Route::get('/role-management', 'index')->name('role-management');
        Route::get('/role-management/new', 'create')->name('role-new');
        Route::post('/role-management/new', 'store')->name('role-new.store');
        Route::get('/role-management/edit/{id}', 'edit')->name('role-edit');
        Route::post('/role-management/edit/{id}', 'update')->name('role-edit.update');
        Route::post('/role-delete/{id}', 'destroy')->name('role-destroy');
    });

    // Route::get('/tutorship/tutor-{tutorInfo?}', [TutorshipController::class, 'getTutorInformation'])->name('tutor-info');
    Route::get('{page}/tutor/{tutorId?}', [TutorshipController::class, 'dashboards'])->name('dashboards');
    Route::post('/update-tutor-students', [TutorshipController::class, 'updateTutorStudents'])->name('update-tutor-students');

    Route::get('/download', function () {
        try {
            //code...
            $template = new \PhpOffice\PhpWord\TemplateProcessor(resource_path('Documentos_HB.docx'));
            $template->setValue('fer','Fernando Guzman');
            $template->setValue('richi','Ricardo Guzman');

            $tenpFile = tempnam(sys_get_temp_dir(),'PHPWord');
            $template->saveAs($tenpFile);

            $header = [
                  "Content-Type: application/octet-stream",
            ];

            return response()->download($tenpFile, 'Documentos_HB.docx', $header)->deleteFileAfterSend($shouldDelete = true);
        
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
            //throw $th;
            return back($e->getCode());
        }    
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
