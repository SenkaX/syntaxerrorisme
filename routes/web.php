<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages de contenu SEO
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/guides', [PageController::class, 'guides'])->name('guides');
Route::get('/tutoriels', [PageController::class, 'tutorials'])->name('tutorials');
Route::get('/outils', [PageController::class, 'tools'])->name('tools');
Route::get('/glossaire', [PageController::class, 'glossary'])->name('glossary');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Sitemap XML
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

// Robots.txt (géré automatiquement par Laravel depuis public/robots.txt)
