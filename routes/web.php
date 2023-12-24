<?php

use App\Models\Categories;
use App\Models\Create;
use App\Models\Procurement;
use App\Models\User;
use Mcamara\LaravelLocalization\LaravelLocalization;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $users = User::get();
    $creates = Create::get();
    $procurements = Procurement::get();
    return view('welcome',[
        'procurement' => $procurements
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/designers', [\App\Http\Controllers\DesignersController::class, 'index'])->name('designers');

Route::middleware(['middleware' => 'auth'])->group (function() {
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/users', 'UsersController@index')->name('users');
  });
Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/users/{user}/make-designers', 'UsersController@makeDesigners')->name('users.make-designers');
    Route::post('/procurement/{procurement}/make-status', 'ProcurementController@makeStatus')->name('procurement.status');
  });
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('create', 'CreateController');
    Route::resource('category', 'CategoryController');
    Route::resource('photo', 'PhotoController');
    Route::resource('procurement', 'ProcurementController');
    Route::resource('profile', 'ProfileController');
});

Route::group(['prefix' => FacadesLaravelLocalization::setLocale()], function()
{
	Route::get('test',function(){
		return view('test');
	});
});
