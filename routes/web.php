<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('index');
});

Route::get("/admin/category",[CategoryController::class,"index"])->name("admin.category.index");
Route::get("/admin/category/create", [CategoryController::class,"create"])->name("admin.category.create");
Route::post("/admin/category/store", [CategoryController::class,"store"])->name("admin.category.store");
Route::get("/admin/category/show/{id}", [CategoryController::class,"show"])->name("admin.category.show");
Route::post("/admin/category/destroy/{id}", [CategoryController::class,"destroy"])->name("admin.category.destroy");
Route::get("/admin/category/edit/{id}", [CategoryController::class,"edit"])->name("admin.category.edit");
Route::post("/admin/category/update", [CategoryController::class,"update"])->name("admin.category.update");