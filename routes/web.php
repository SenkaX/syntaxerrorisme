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

// Sitemap pour Google
Route::get('/sitemap.xml', function () {
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    // Toutes vos pages
    $pages = [
        ['url' => url('/'), 'priority' => '1.0'],
        ['url' => route('about'), 'priority' => '0.8'],
        ['url' => route('guides'), 'priority' => '0.8'],
        ['url' => route('tutorials'), 'priority' => '0.8'],
        ['url' => route('tools'), 'priority' => '0.8'],
        ['url' => route('glossary'), 'priority' => '0.8'],
        ['url' => route('faq'), 'priority' => '0.7'],
        ['url' => route('contact'), 'priority' => '0.6'],
        ['url' => route('blog.index'), 'priority' => '0.9'],
    ];
    
    foreach ($pages as $page) {
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . $page['url'] . '</loc>';
        $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $sitemap .= '<changefreq>weekly</changefreq>';
        $sitemap .= '<priority>' . $page['priority'] . '</priority>';
        $sitemap .= '</url>';
    }
    
    $sitemap .= '</urlset>';
    
    return response($sitemap)->header('Content-Type', 'application/xml');
});

// Sitemap XML
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

// Robots.txt (géré automatiquement par Laravel depuis public/robots.txt)
