<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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
Route::get('/',[MainController::class,'index'])->name('index');
Route::post('send_post',[MainController::class,'send_massage'] )->name('send_message');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('menus', MenusController::class);
    Route::resource('home', HomeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('resume', ResumeController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('skills', SkillsController::class);
   
  
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
