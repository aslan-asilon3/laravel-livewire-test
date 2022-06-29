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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home-index');
// Route::get('/', function () {
//     return view('livewire/home/home-index')->name('home-index');
// });

Route::get('/datamember', [App\Http\Controllers\DatamemberController::class, 'index'])->name('datamember-index');
// Route::get('/datamember-create', [App\Http\Controllers\DatamemberController::class, 'index'])->name('datamember-create');
// Route::get('/datamember-create', [App\Http\Livewire\Datamember\DatamemberCreate::class, 'render']);
// Route::get('/datamember-delete//{id}', [App\Http\Controllers\DatamemberController::class, 'destroy'])->name('datamember-delete');


Route::get('/datamemberraw', [App\Http\Controllers\DatamemberrawController::class, 'index'])->name('datamemberraw-index');


Route::view('/contacts','livewire.contacts.index');


Route::get('/category',function(){
    return view('category');
});

// Route::get('/users',function(){
//     return view('livewire.home');
// });

Route::view('users','livewire.home');