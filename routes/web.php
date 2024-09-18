<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PesertaController;

Route::get('/', [FormController::class,'index']);

Route::get('login', [LoginController::class, 'index'])->name('login'); 

Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', function(){
    Auth::logout();
    return redirect()->to('login');
})->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//middleware
Route::middleware(['checkLevel:1,3,2'])->group(function(){
    //sidebar level 
    Route::resource('level', LevelController::class);
    
    //sidebar jurusan
    Route::resource('jurusan', JurusanController::class);

    //sidebar gelombang
    Route::resource('gelombang', GelombangController::class);
    Route::post('gelombang/update-status/{id}', [GelombangController::class, 'updateStatus'])->name('gelombang.update-status');
});

//sidebar  user
Route::resource('user', UserController::class);

//sidebar peserta pelatihan
Route::resource('peserta', PesertaController::class);

//store peserta form
Route::post('/submit-form', [FormController::class, 'store'])->name('action-form');