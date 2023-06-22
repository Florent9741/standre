<?php
use App\Http\Controllers\MairieController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MairieController::class, 'index'])->name('welcome');
Route::post('ascendent', [MairieController::class, 'ascendent'])->name('ascendent');   
Route::post('desc', [MairieController::class, 'desc'])->name('desc');    
Route::post('ascendent2', [MairieController::class, 'ascendent2'])->name('ascendent2');   
Route::post('desc2', [MairieController::class, 'desc2'])->name('desc2');
Route::post('ascendent3', [MairieController::class, 'ascendent3'])->name('ascendent3');   
Route::post('desc3', [MairieController::class, 'desc3'])->name('desc3');
Route::post('ascendent4', [MairieController::class, 'ascendent4'])->name('ascendent4');   
Route::post('desc4', [MairieController::class, 'desc4'])->name('desc4');
Route::get('lien', [MairieController::class, 'lien'])->name('lien');                
Route::get('lienwit', [MairieController::class, 'lienwit'])->name('lienwit');
Route::get('arrivant', [MairieController::class, 'arrivant'])->name('arrivant');
Route::get('doctel', [MairieController::class, 'doctel'])->name('doctel');
Route::get('alcatel1', [MairieController::class, 'alcatel1'])->name('alcatel1');
Route::get('alcatel2', [MairieController::class, 'alcatel2'])->name('alcatel2');
Route::get('toto', [MairieController::class, 'toto'])->name('toto');

Route::get('register', [Authcontroller::class, 'register'])->name('register');

Route::post('register', [Authcontroller::class, 'register_action'])->name('register.action');

Route::get('login', [Authcontroller::class, 'login'])->name('login');

Route::post('login', [Authcontroller::class, 'login_action'])->name('login.action');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');

//-----------------------------------------------------------------------------------------

Route::middleware(['Admin'])->group(function () {

    Route::get('/user', [UserController::class, 'getall'])->name('user')->middleware('Admin');
   
    Route::get('/dashboard', [MairieController::class, 'dashboard'])->name('dashboard');
    Route::get('/showdelete/{id}', [UserController::class, 'showdel']);
    Route::delete('/user/{id}', [UserController::class, 'delete']);
    Route::get('/restore', [UserController::class, 'showrestore']);
    Route::get('/restore/{id}', [UserController::class, 'restore'])->name('user.restore');   

});

Route::get('/backend', [MairieController::class, 'crud'])->name('backend');
Route::get('/backend2', [MairieController::class, 'crud2'])->name('backend2');
Route::get('/backend3', [MairieController::class, 'crud3'])->name('backend3');

Route::post('/Mairie/ajouter', [MairieController::class, 'create'])->name('ajouter');

Route::post('/Mairie/update/{id}', [MairieController::class, 'update'])->whereNumber('id')->name('update');

Route::delete('/Mairie/delete/{id}', [MairieController::class, 'delete'])->whereNumber('id')->name('delete');
//--------------------------NUMS2----------------------------------------------//
Route::post('/Mairie/ajouter2', [MairieController::class, 'createnums2'])->name('ajouter2');

Route::post('/Mairie/update2/{id}', [MairieController::class, 'updatenums2'])->whereNumber('id')->name('update2');

Route::delete('/Mairie/delete2/{id}', [MairieController::class, 'deletenums2'])->whereNumber('id')->name('delete2');


Route::post('/Mairie/ajouter3', [MairieController::class, 'creategpinter'])->name('ajouter3');

Route::post('/Mairie/update3/{id}', [MairieController::class, 'updategpinter'])->whereNumber('id')->name('update3');

Route::delete('/Mairie/delete2/{id}', [MairieController::class, 'deletegpinter'])->whereNumber('id')->name('delete2');