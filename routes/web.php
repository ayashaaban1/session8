<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('index', [Controller::class, 'index'])->name('index');
Route::get('about', [Controller::class, 'about'])->name('about');
Route::get('services', [Controller::class, 'services'])->name('services');
Route::get('guards', [Controller::class, 'guards'])->name('guards');

//Auth::routes();
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('index',[Controller::class,'index'])->middleware('verified')->name('index');
//task14
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('contact', [Controller::class, 'contact'])->name('contact');
    });