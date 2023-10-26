<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\CreateController as CreateController;
use App\Http\Controllers\UpdateController as UpdateController;
use App\Http\Controllers\DetailsController as DetailsController;
use App\Http\Controllers\DeleteController as DeleteController;

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

//home page link
Route::get('/', [HomeController::class, 'home'])->name("homePage");
//create page link
Route::get('/create', [CreateController::class, 'create'])->name("createPage");
Route::post('/create-new-task', [CreateController::class, 'createNewTask'])->name("createNewTaskPage");
//update page link
Route::get('/edit/{id}', [UpdateController::class, 'edit'])->name("editPage");
Route::post('/update', [UpdateController::class, 'update'])->name("updatePage");
//details page link
Route::get('/details/{id}', [DetailsController::class, 'details'])->name("detailsPage");
//delete page link
Route::get('/delete/{id}', [DeleteController::class, 'delete'])->name("deletePage");
