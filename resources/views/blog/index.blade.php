@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Blog Syntaxerrorisme</h1>
            <p class="text-xl text-blue-100">Articles, tutoriels et astuces sur le syntaxerrorisme</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-gradient-to-r from-blue-500 to-blue-700 h-48 flex items-center justify-center">
                    <h2 class="text-2xl font-bold text-white text-center px-4">{{ $article['title'] }}</h2>
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">📅 {{ date('d/m/Y', strtotime($article['date'])) }}</p>
                    <p class="text-gray-700 mb-4 leading-relaxed">{{ $article['excerpt'] }}</p>
                    <a href="/blog/{{ $article['slug'] }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-semibold" title="{{ $article['title'] }}">
                        Lire l'article →
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <div class="mt-12 bg-blue-50 border-l-4 border-blue-600 p-6 rounded-lg">
            <h3 class="text-2xl font-bold text-blue-800 mb-4">📖 Tous nos articles sur le Syntaxerrorisme</h3>
            <p class="text-gray-700">
                Explorez notre collection complète d'articles sur le <strong class="text-blue-600">syntaxerrorisme</strong>. Chaque article est conçu pour vous aider à maîtriser les techniques de débogage et à améliorer la qualité de votre code.
            </p>
        </div>
    </section>
</article>
@endsection
