<?php

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

Route::get('/', [App\Http\Controllers\DatabaseController::class,'index']);
Route::get('/show-tables/{db_name}', [App\Http\Controllers\DatabaseController::class,'show_tables'])->name("show_tables");
Route::get('/show-table-data/{db_name}/{table_name}', [App\Http\Controllers\DatabaseController::class,'show_columns'])->name("show_columns");
Route::post('/create/database', [App\Http\Controllers\DatabaseController::class,'create_database'])->name("create_database");
Route::post('/create-table/{db_name}', [App\Http\Controllers\DatabaseController::class,'create_table'])->name("create_table");
Route::get('/show-create-table/{db_name}', [App\Http\Controllers\DatabaseController::class,'show_create_table'])->name("show_create_table");
Route::get('/show-create-database', [App\Http\Controllers\DatabaseController::class,'show_create_database'])->name("show_create_database");
//Route::get('/get-count', [App\Http\Controllers\DatabaseController::class,'create_count'])->name("create_count");
Route::post('/delete-table/{table_name}/{db_name}', [App\Http\Controllers\DatabaseController::class,'delete_table'])->name("delete_table");


