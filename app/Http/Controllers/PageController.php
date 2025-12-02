<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $data = [
            'title' => 'À Propos du Syntaxerrorisme - Notre Mission',
            'description' => 'Découvrez l\'histoire et la mission du syntaxerrorisme. Nous aidons les développeurs à maîtriser les erreurs de syntaxe depuis 2025.',
            'keywords' => 'syntaxerrorisme, à propos, mission, équipe, développement',
        ];
        return view('pages.about', $data);
    }

    public function guides()
    {
        $data = [
            'title' => 'Guides Complets sur le Syntaxerrorisme',
            'description' => 'Guides détaillés pour maîtriser le syntaxerrorisme : débogage, bonnes pratiques, et techniques avancées.',
            'keywords' => 'guides syntaxerrorisme, tutoriels, apprentissage, débogage',
        ];
        return view('pages.guides', $data);
    }

    public function tutorials()
    {
        $data = [
            'title' => 'Tutoriels Pratiques de Syntaxerrorisme',
            'description' => 'Tutoriels pas à pas pour apprendre le syntaxerrorisme. Exemples concrets et exercices pratiques.',
            'keywords' => 'tutoriels syntaxerrorisme, exemples, pratique, exercices',
        ];
        return view('pages.tutorials', $data);
    }

    public function tools()
    {
        $data = [
            'title' => 'Outils de Syntaxerrorisme - Les Meilleurs Outils de Débogage',
            'description' => 'Découvrez les meilleurs outils pour pratiquer le syntaxerrorisme : linters, IDE, analyseurs statiques.',
            'keywords' => 'outils syntaxerrorisme, linters, IDE, analyseurs, débogage',
        ];
        return view('pages.tools', $data);
    }

    public function glossary()
    {
        $data = [
            'title' => 'Glossaire du Syntaxerrorisme - Termes et Définitions',
            'description' => 'Glossaire complet des termes liés au syntaxerrorisme. Définitions claires et exemples.',
            'keywords' => 'glossaire syntaxerrorisme, définitions, termes, vocabulaire',
        ];
        return view('pages.glossary', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ - Questions Fréquentes sur le Syntaxerrorisme',
            'description' => 'Réponses aux questions les plus fréquentes sur le syntaxerrorisme. Tout ce que vous devez savoir.',
            'keywords' => 'faq syntaxerrorisme, questions, réponses, aide',
        ];
        return view('pages.faq', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact - Contactez l\'Équipe Syntaxerrorisme',
            'description' => 'Contactez-nous pour toute question sur le syntaxerrorisme. Notre équipe est là pour vous aider.',
            'keywords' => 'contact syntaxerrorisme, support, aide, équipe',
        ];
        return view('pages.contact', $data);
    }
}
