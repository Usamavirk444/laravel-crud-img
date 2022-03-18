<?php
use App\Http\Controllers\ImageController;
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

Route::get('index', [ImageController::class, 'index']);
Route::post('add', [ImageController::class, 'add']);
Route::get('view', [ImageController::class, 'view']);
Route::get('edit/{id}', [ImageController::class, 'edit']);
Route::put('update/{id}', [ImageController::class, 'update'])->name('update');
Route::get('delete/{id}', [ImageController::class, 'delete']);

