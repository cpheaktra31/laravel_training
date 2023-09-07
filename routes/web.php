<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/todolist', [TodoListController::class, 'index']);
Route::get('/todolist/create', [TodoListController::class, 'create']);
Route::post('/todolist/store', [TodoListController::class, 'store']);
Route::get('/todolist/show/{todolist}', [TodoListController::class, 'show']);
Route::put('/todolist/update/{todolist}', [TodoListController::class, 'update']);
Route::delete('/todolist/destroy/{todolist}', [TodoListController::class, 'destroy']);

