<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/user/{name?}', [UserController::class, 'show']);
// Route::get('/users', [UserController::class, 'list']);
// Route::get('/show/{id}', ShowProfileController::class);
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/members', [HomeController::class, 'members']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/about', [HomeController::class, 'about']);

Route::resource('companies', CompaniesController::class);

// Route::get('/hello/{name?}', function ($name=null) {
//     return 'Hello '. $name;
// });


// Route::get('/user/{name?}', function ($name=null) {
//     return 'Hello user '. $name;
// });

// Route::get('/search', function (Request $request) {
//     $name = $request->get('name', '');
//     $age = $request->get('age', '');

//     return $name . ' ' . $age;
// });

// Route::group(['prefix'=>'dashboard'], function () {
//     Route::get('/users', function () {
//         return 'Users dashboard';
//     });
//     Route::get('/statistic', function () {
//         return 'Statistic dashboard';
//     });
// });
