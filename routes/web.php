<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
    $projects = Project::paginate(2);
    return view('index' , ['projects' => $projects]);
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services' , function(){
    return view('services');
})->name('services');

Route::get('/gallery', function () {
    $projects = Project::paginate(2);
    return view('gallery' , ['projects' => $projects]);
})->name('gallery');

Route::middleware(['master'])->group(function(){
    Route::get('/users' , [UsersController::class , 'index'])->name('users.index');
    Route::post('/updateUserRole/{user}' , [UsersController::class , 'updateUserRole'])->name('users.updateRole');
    Route::post('/users/{user}' , [UsersController::class , 'destroy'])->name('users.destroy');
});

Route::resource('projects' , ProjectController::class);

Route::group(['middleware' => ['json.response']] , function(){
//no need for @csrf here so we make use of Get method
Route::get('/send-contact-form/{name}/{email}/{subject}/{message}' , [SendContactUsEmail::class , 'send']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');

require __DIR__.'/auth.php';