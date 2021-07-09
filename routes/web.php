<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SendContactUsEmail;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    $projects = Project::paginate(2);
    return view('gallery' , ['projects' => $projects]);
})->name('gallery');

Route::resource('projects' , ProjectController::class);

Route::group(['middleware' => ['json.response']] , function(){
//no need for @csrf here so we make use of Get method
Route::get('/contact/{name}/{email}/{subject}/{message}' , [SendContactUsEmail::class , 'send']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');

require __DIR__.'/auth.php';