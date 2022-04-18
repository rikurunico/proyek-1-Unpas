<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    $strHome = "home";
    return view("home", [
        "active" => "$strHome",
        "title" => "Home",
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "active" => "about",
        "title" => "About",
        "name" => "nico",
        "email" => "Wazir Qorni Abud",
        "image" => "me.jpg",
    ]);
});

Route::get("/login", [LoginController::class, "index"])->middleware("guest");
Route::get("/register", [RegisterController::class, "index"])->middleware(
    "guest"
);
Route::get("/dashboard", [DashboardController::class, "index"])->middleware(
    "auth"
);
Route::get("/dashboard/edit", [DashboardController::class, "edit"])->middleware(
    "auth"
);
Route::post("/dashboard/update/{id}", [
    DashboardController::class,
    "update",
])->middleware("auth");
Route::post("/login", [LoginController::class, "authenticate"])->name("login");
Route::post("/logout", [LoginController::class, "logout"]);
Route::post("/register", [RegisterController::class, "store"]);
