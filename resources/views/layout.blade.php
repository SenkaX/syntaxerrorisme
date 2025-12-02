<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>{{ $title ?? 'Syntaxerrorisme' }}</title>
    <meta name="description" content="{{ $description ?? 'Découvrez le syntaxerrorisme et maîtrisez les erreurs de syntaxe' }}">
    <meta name="keywords" content="{{ $keywords ?? 'syntaxerrorisme, erreur syntaxe, programmation' }}">
    <meta name="author" content="Syntaxerrorisme">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $url ?? url()->current() }}">
    
    <meta property="og:title" content="{{ $title ?? 'Syntaxerrorisme' }}">
    <meta property="og:description" content="{{ $description ?? 'Découvrez le syntaxerrorisme' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $url ?? url()->current() }}">
    <meta property="og:site_name" content="Syntaxerrorisme">
    <meta property="og:locale" content="fr_FR">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Syntaxerrorisme' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Découvrez le syntaxerrorisme' }}">
    
    <!-- Favicon -->
    <link rel="icon" type="public" href="{{ asset('icon-syntaxerrorisme.webp') }}">
    <link rel="apple-touch-icon" href="{{ asset('icon-syntaxerrorisme.webp') }}">

    <!-- Preload JavaScript pour améliorer les performances -->
    <link rel="preload" href="{{ asset('js/seo-enhancements.js') }}" as="script">
    
    <!-- Schema.org JSON-LD pour le SEO -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Syntaxerrorisme',
        'description' => 'Maîtrisez le syntaxerrorisme et les erreurs de syntaxe en programmation',
        'url' => url('/'),
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => url('/') . '?q={search_term_string}',
            'query-input' => 'required name=search_term_string'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    
    <!-- Tailwind CSS CDN pour un design moderne -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Configuration Tailwind personnalisée -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
</head>
<body class="antialiased bg-gray-50">
    <header class="sticky top-0 z-50 bg-gradient-to-r from-blue-600 to-blue-800 shadow-lg">
        <nav class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="/" class="inline-block text-white hover:text-blue-200 transition-colors duration-300" title="Accueil - Syntaxerrorisme">
                    <h1 class="text-2xl md:text-3xl font-bold">Syntaxerrorisme</h1>
                </a>

                <!-- Menu desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-white hover:text-yellow-300 transition-colors duration-200 font-medium" title="Accueil">Accueil</a>
                    <a href="/a-propos" class="text-white hover:text-yellow-300 transition-colors duration-200 font-medium" title="À propos du syntaxerrorisme">À propos</a>
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors duration-200 font-medium flex items-center">
                            Ressources
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="/guides" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 rounded-t-lg" title="Guides syntaxerrorisme">Guides</a>
                            <a href="/tutoriels" class="block px-4 py-2 text-gray-800 hover:bg-blue-50" title="Tutoriels syntaxerrorisme">Tutoriels</a>
                            <a href="/outils" class="block px-4 py-2 text-gray-800 hover:bg-blue-50" title="Outils de débogage">Outils</a>
                            <a href="/glossaire" class="block px-4 py-2 text-gray-800 hover:bg-blue-50 rounded-b-lg" title="Glossaire syntaxerrorisme">Glossaire</a>
                        </div>
                    </div>
                    <a href="/blog" class="text-white hover:text-yellow-300 transition-colors duration-200 font-medium" title="Blog syntaxerrorisme">Blog</a>
                    <a href="/faq" class="text-white hover:text-yellow-300 transition-colors duration-200 font-medium" title="FAQ syntaxerrorisme">FAQ</a>
                    <a href="/contact" class="bg-yellow-400 text-blue-900 px-4 py-2 rounded-lg hover:bg-yellow-300 transition-colors duration-200 font-bold" title="Nous contacter">Contact</a>
                </div>

                <!-- Bouton menu mobile -->
                <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none" aria-label="Menu mobile">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu mobile -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="/" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2" title="Accueil">Accueil</a>
                    <a href="/a-propos" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2" title="À propos">À propos</a>
                    <a href="/guides" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2 pl-4" title="Guides">Guides</a>
                    <a href="/tutoriels" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2 pl-4" title="Tutoriels">Tutoriels</a>
                    <a href="/outils" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2 pl-4" title="Outils">Outils</a>
                    <a href="/glossaire" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2 pl-4" title="Glossaire">Glossaire</a>
                    <a href="/blog" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2" title="Blog">Blog</a>
                    <a href="/faq" class="text-white hover:text-yellow-300 transition-colors duration-200 py-2" title="FAQ">FAQ</a>
                    <a href="/contact" class="bg-yellow-400 text-blue-900 px-4 py-2 rounded-lg hover:bg-yellow-300 transition-colors duration-200 font-bold text-center" title="Contact">Contact</a>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Script pour le menu mobile -->
    <script>
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white border-t-4 border-blue-600">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- À propos -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-blue-400 mb-4">À Propos</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Le <strong class="text-white">syntaxerrorisme</strong> est votre guide complet pour comprendre et maîtriser les erreurs de syntaxe dans le développement logiciel.</p>
                    <p class="text-gray-400 text-sm italic">Excellence en débogage et qualité du code.</p>
                </div>

                <!-- Liens rapides -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-blue-400 mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="/" title="Accueil - Syntaxerrorisme" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Accueil</a></li>
                        <li><a href="/sitemap.xml" title="Plan du site" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Plan du site</a></li>
                        <li><a href="/#techniques" title="Techniques de syntaxerrorisme" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Techniques</a></li>
                        <li><a href="/#outils" title="Outils de débogage" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Outils</a></li>
                    </ul>
                </div>

                <!-- Ressources -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-blue-400 mb-4">Ressources</h3>
                    <ul class="space-y-2">
                        <li><a href="/#fondamentaux" title="Fondamentaux du syntaxerrorisme" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Fondamentaux</a></li>
                        <li><a href="/#pratiques" title="Meilleures pratiques" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">Meilleures Pratiques</a></li>
                        <li><a href="/#conclusion" title="Conclusion" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 text-sm">En savoir plus</a></li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-blue-400 mb-4">Suivez-nous</h3>
                    <p class="text-gray-300 text-sm mb-4">Restez informé des dernières techniques de <em class="text-blue-400">syntaxerrorisme</em>.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" title="Syntaxerrorisme sur Twitter" aria-label="Twitter" class="px-4 py-2 bg-gray-800 hover:bg-blue-600 rounded-lg transition-all duration-200 text-sm">Twitter</a>
                        <a href="#" title="Syntaxerrorisme sur GitHub" aria-label="GitHub" class="px-4 py-2 bg-gray-800 hover:bg-blue-600 rounded-lg transition-all duration-200 text-sm">GitHub</a>
                        <a href="#" title="Syntaxerrorisme sur LinkedIn" aria-label="LinkedIn" class="px-4 py-2 bg-gray-800 hover:bg-blue-600 rounded-lg transition-all duration-200 text-sm">LinkedIn</a>
                    </div>
                </div>
            </div>

            <!-- Barre de copyright -->
            <div class="border-t border-gray-800 pt-8 text-center space-y-2">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} <strong class="text-white">Syntaxerrorisme</strong>. Tous droits réservés.</p>
                <p class="text-gray-500 text-xs space-x-2">
                    <a href="/sitemap.xml" title="Sitemap XML" class="hover:text-blue-400 transition-colors">Sitemap</a>
                    <span>|</span>
                    <a href="/robots.txt" title="Robots.txt" class="hover:text-blue-400 transition-colors">Robots</a>
                    <span>|</span>
                    <span>Optimisé pour le SEO</span>
                </p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript pour améliorer le SEO et l'engagement utilisateur -->
    <script src="{{ asset('js/seo-enhancements.js') }}" defer></script>
</body>
</html>
