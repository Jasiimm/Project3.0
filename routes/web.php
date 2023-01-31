<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\XSS;

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

Route::get('/home', function () {
    return view('/home'); 
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/pizzas', function () {
    return view('/pizzas');
});

Route::get('/contact', function () {
    return view('/contact');
});

Route::get('/staff', function () {
    return view('/staff');
});




Route::get("/", [HomeController::class, "index"]);

Route::get("/staff", [HomeController::class, "index2"]);

Route::get("/users", [AdminController::class, "user"]);

Route::get("/deletepizza/{id}", [AdminController::class, "deletepizza"]);

Route::get("/pizzamenu", [AdminController::class, "pizzamenu"]);

Route::post("/uploadpizza", [AdminController::class, "upload"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/updateview/{id}", [AdminController::class, "updateview"]);

Route::post("/update/{id}", [AdminController::class, "update"]);


//------------->   Redirects Routes voor de Cart Visueel Functie <-------------------//
Route::get("/redirects", [HomeController::class, "redirects"]);
Route::get("/pizzas", [HomeController::class, "redirects2"]);


//-------------> Redirects Routes voor de Cart Visueel Functie <-----------------------//


Route::post("/reservation",[AdminController::class, "reservation"]);

Route::get("/viewreservation",[AdminController::class, "viewreservation"]);

Route::get("/viewstaff",[AdminController::class, "viewstaff"]);

Route::post("/uploadstaff",[AdminController::class, "uploadstaff"]);

Route::get("/updatestaff/{id}",[AdminController::class, "updatestaff"]);

Route::post("/updatestaffmember/{id}",[AdminController::class, "updatestaffmember"]);

Route::get("/deletestaff/{id}",[AdminController::class, "deletestaff"]);

Route::post("/addcart/{id}",[HomeController::class, "addcart"]);

Route::get("/showcart/{id}",[HomeController::class, "showcart"]);

Route::get("/remove/{id}", [HomeController::class, "remove"]);


Route::get("/orders", [AdminController::class, "orders"]);

Route::group(['middelware'=>['XSS']],function(){
Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]);
//   Route::get('register', [HomeController::class, 'showRegistrationForm'])->name('register');
 //   Route::post('register', [HomeController::class, 'register']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
