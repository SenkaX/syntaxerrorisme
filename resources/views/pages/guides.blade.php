@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Guides Syntaxerrorisme</h1>
            <p class="text-xl text-blue-100">Guides complets pour maîtriser le syntaxerrorisme</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">🎯 Guide du Débutant</h2>
                <p class="text-gray-700 mb-4">Introduction complète au <strong class="text-blue-600">syntaxerrorisme</strong> pour les développeurs débutants.</p>
                <a href="/blog/introduction-syntaxerrorisme" class="text-blue-600 hover:underline font-semibold">Lire le guide →</a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">🔧 Outils Essentiels</h2>
                <p class="text-gray-700 mb-4">Les 10 meilleurs outils pour pratiquer le <strong class="text-blue-600">syntaxerrorisme</strong>.</p>
                <a href="/blog/outils-essentiels-syntaxerrorisme" class="text-blue-600 hover:underline font-semibold">Découvrir les outils →</a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">🐍 Python Syntaxerrorisme</h2>
                <p class="text-gray-700 mb-4">Techniques avancées de <strong class="text-blue-600">syntaxerrorisme</strong> pour Python.</p>
                <a href="/blog/syntaxerrorisme-python" class="text-blue-600 hover:underline font-semibold">Voir le guide Python →</a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">⚡ JavaScript Syntaxerrorisme</h2>
                <p class="text-gray-700 mb-4">Maîtriser le <strong class="text-blue-600">syntaxerrorisme</strong> en JavaScript et TypeScript.</p>
                <a href="/blog/syntaxerrorisme-javascript" class="text-blue-600 hover:underline font-semibold">Voir le guide JS →</a>
            </div>
        </div>
    </section>
</article>
@endsection
