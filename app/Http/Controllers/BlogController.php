<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getArticles()
    {
        return [
            [
                'slug' => 'introduction-syntaxerrorisme',
                'title' => 'Introduction au Syntaxerrorisme : Guide Complet pour Débutants',
                'excerpt' => 'Découvrez les bases du syntaxerrorisme et comment cette pratique peut transformer votre approche du débogage.',
                'content' => 'Le syntaxerrorisme est une discipline essentielle pour tout développeur...',
                'date' => '2025-11-01',
                'keywords' => 'syntaxerrorisme introduction, débutant, guide',
            ],
            [
                'slug' => 'outils-essentiels-syntaxerrorisme',
                'title' => '10 Outils Essentiels pour Maîtriser le Syntaxerrorisme',
                'excerpt' => 'Les meilleurs outils pour pratiquer le syntaxerrorisme efficacement. Linters, IDE et analyseurs.',
                'content' => 'Pour exceller dans le syntaxerrorisme, il est crucial d\'utiliser les bons outils...',
                'date' => '2025-10-28',
                'keywords' => 'outils syntaxerrorisme, linters, IDE',
            ],
            [
                'slug' => 'erreurs-communes-syntaxe',
                'title' => 'Les 15 Erreurs de Syntaxe les Plus Communes et Comment les Éviter',
                'excerpt' => 'Analyse détaillée des erreurs de syntaxe les plus fréquentes et techniques de syntaxerrorisme pour les corriger.',
                'content' => 'Dans la pratique du syntaxerrorisme, certaines erreurs reviennent régulièrement...',
                'date' => '2025-10-25',
                'keywords' => 'erreurs syntaxe, syntaxerrorisme, débogage',
            ],
            [
                'slug' => 'syntaxerrorisme-python',
                'title' => 'Syntaxerrorisme en Python : Techniques Avancées',
                'excerpt' => 'Guide complet du syntaxerrorisme appliqué à Python. Astuces et bonnes pratiques spécifiques.',
                'content' => 'Le syntaxerrorisme en Python nécessite une compréhension approfondie...',
                'date' => '2025-10-20',
                'keywords' => 'syntaxerrorisme python, débogage python',
            ],
            [
                'slug' => 'syntaxerrorisme-javascript',
                'title' => 'Maîtriser le Syntaxerrorisme en JavaScript et TypeScript',
                'excerpt' => 'Techniques de syntaxerrorisme pour JavaScript et TypeScript. De l\'ES6 aux dernières features.',
                'content' => 'Le syntaxerrorisme en JavaScript présente des défis uniques...',
                'date' => '2025-10-15',
                'keywords' => 'syntaxerrorisme javascript, typescript, débogage',
            ],
            [
                'slug' => 'automatiser-syntaxerrorisme',
                'title' => 'Automatiser le Syntaxerrorisme : CI/CD et Outils',
                'excerpt' => 'Comment automatiser le syntaxerrorisme dans votre pipeline CI/CD pour une qualité de code optimale.',
                'content' => 'L\'automatisation du syntaxerrorisme est devenue indispensable...',
                'date' => '2025-10-10',
                'keywords' => 'automatisation syntaxerrorisme, CI/CD, qualité code',
            ],
        ];
    }

    public function index()
    {
        $articles = $this->getArticles();
        
        $data = [
            'title' => 'Blog Syntaxerrorisme - Articles et Tutoriels',
            'description' => 'Blog dédié au syntaxerrorisme. Articles, tutoriels et conseils pour maîtriser le débogage et les erreurs de syntaxe.',
            'keywords' => 'blog syntaxerrorisme, articles, tutoriels, débogage',
            'articles' => $articles,
        ];
        
        return view('blog.index', $data);
    }

    public function show($slug)
    {
        $articles = $this->getArticles();
        $article = collect($articles)->firstWhere('slug', $slug);
        
        if (!$article) {
            abort(404);
        }
        
        $data = [
            'title' => $article['title'] . ' - Blog Syntaxerrorisme',
            'description' => $article['excerpt'],
            'keywords' => $article['keywords'],
            'article' => $article,
        ];
        
        return view('blog.show', $data);
    }
}
