<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil optimisée SEO
     */
    public function index()
    {
        $data = [
            'title' => 'Syntaxerrorisme - Comprendre et Maîtriser les Erreurs de Syntaxe',
            'description' => 'Découvrez le syntaxerrorisme : guide complet pour comprendre, prévenir et résoudre les erreurs de syntaxe dans votre code. Expertise en débogage et bonnes pratiques de programmation.',
            'keywords' => 'syntaxerrorisme, erreur de syntaxe, débogage, programmation, développement web, syntax error, coding, debugging',
            'url' => URL::to('/'),
        ];

        return view('home', $data);
    }

    /**
     * Génère le sitemap XML avec toutes les pages
     */
    public function sitemap()
    {
        $pages = [
            ['url' => URL::to('/'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['url' => URL::to('/a-propos'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/guides'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => URL::to('/tutoriels'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => URL::to('/outils'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => URL::to('/glossaire'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/faq'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'daily', 'priority' => '0.9'],
            ['url' => URL::to('/contact'), 'lastmod' => now()->toW3cString(), 'changefreq' => 'yearly', 'priority' => '0.7'],
            // Articles de blog
            ['url' => URL::to('/blog/introduction-syntaxerrorisme'), 'lastmod' => '2025-11-01', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog/outils-essentiels-syntaxerrorisme'), 'lastmod' => '2025-10-28', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog/erreurs-communes-syntaxe'), 'lastmod' => '2025-10-25', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog/syntaxerrorisme-python'), 'lastmod' => '2025-10-20', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog/syntaxerrorisme-javascript'), 'lastmod' => '2025-10-15', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => URL::to('/blog/automatiser-syntaxerrorisme'), 'lastmod' => '2025-10-10', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ];

        return response()->view('sitemap', ['pages' => $pages])
            ->header('Content-Type', 'application/xml');
    }
}
