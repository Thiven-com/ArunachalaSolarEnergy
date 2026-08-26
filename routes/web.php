<?php
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('projects', [PageController::class, 'projects'])->name('projects');

Route::get('whychoose', [PageController::class, 'whychoose'])->name('whychoose');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'submitContactEnquiry'])->name('contact.store');



Route::get('/sitemap.xml', [SitemapController::class, 'index'])
    ->name('sitemap');




