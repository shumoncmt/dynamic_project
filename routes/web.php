<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//Page Route Start

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/feature', [SiteController::class, 'feature'])->name('feature');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/service', [SiteController::class, 'service'])->name('service');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/team', [SiteController::class, 'team'])->name('team');
Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('testimonial');
Route::get('/error', [SiteController::class, 'error'])->name('error');

//Page Route End

//Project Route Start

Route::get('/project', [SiteController::class, 'project'])->name('project');



//Project Route End

// Route::get('/product-category/category', [SiteController::class, 'category'])->name('category');
Route::get('/categories/blower', [SiteController::class, 'blower'])->name('blower');
Route::get('/categories/diffuser', [SiteController::class, 'diffuser'])->name('diffuser');
Route::get('/categories/industrial-pump', [SiteController::class, 'industrialpump'])->name('industrialpump');
Route::get('/categories/electric-motor', [SiteController::class, 'electricmotor'])->name('electricmotor');
Route::get('/categories/electromagenetic-flow-meter', [SiteController::class, 'electromageneticflowmeter'])->name('electromageneticflowmeter');
Route::get('/categories/frp-vessel', [SiteController::class, 'frpvessel'])->name('frpvessel');
Route::get('/categories/ro-and-uf-membrane', [SiteController::class, 'roandufmembrane'])->name('roandufmembrane');
Route::get('/categories/water-treatment-accessories', [SiteController::class, 'watertreatmentaccessories'])->name('watertreatmentaccessories');
Route::get('/categories/water-treatment-chemicals-and-media', [SiteController::class, 'watertreatmentchemicalsandmedia'])->name('watertreatmentchemicalsandmedia');


//Product Category End