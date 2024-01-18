<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
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

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/ourmember', function (){
    return view('ourmember');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/gsfbg', function (){
    return view('gsfbg');
});


Route::get('/ourmission', function(){
    return view('ourmission');
});

Route::get('/gallery23', function(){
    return view('gallery23');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'gallery']);


Route::get('/upload',[App\Http\Controllers\PhotoController::class, 'create']);
Route::post('/upload',[App\Http\Controllers\PhotoController::class, 'store']);
Route::get('edit_photo/{id}',[PhotoController::class, 'edit_photo']);
Route::post('photo_edit',[PhotoController::class, 'photo_edit']);
Route::get('photo_delete/{id}',[PhotoController::class, 'photo_delete']);




Route::get('/projects',[App\Http\Controllers\ProjectController::class, 'create']);
Route::post('projects', [\App\Http\Controllers\ProjectController::class, 'store']);

Route::get('/project_edit/{id}', [\App\Http\Controllers\ProjectController::class, 'project_edit']);
Route::post('/edit_post', [\App\Http\Controllers\ProjectController::class, 'edit_post']);
Route::get('project_delete/{id}', [\App\Http\Controllers\ProjectController::class, 'delete']);


