@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Outils de Syntaxerrorisme</h1>
            <p class="text-xl text-blue-100">Les meilleurs outils pour le syntaxerrorisme</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-blue-800 mb-3">🔍 Linters</h3>
                <p class="text-gray-700">Outils essentiels pour le <strong class="text-blue-600">syntaxerrorisme</strong> automatisé.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-blue-800 mb-3">💻 IDE</h3>
                <p class="text-gray-700">Environnements de développement pour le <strong class="text-blue-600">syntaxerrorisme</strong>.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-blue-800 mb-3">🧪 Analyseurs</h3>
                <p class="text-gray-700">Analyseurs statiques pour le <strong class="text-blue-600">syntaxerrorisme</strong>.</p>
            </div>
        </div>
    </section>
</article>
@endsection
