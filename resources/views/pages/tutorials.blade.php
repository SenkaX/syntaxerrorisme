@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Tutoriels Syntaxerrorisme</h1>
            <p class="text-xl text-blue-100">Tutoriels pratiques pas à pas</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="space-y-6">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Débutant</span>
                <h2 class="text-2xl font-bold text-blue-800 mt-4 mb-3">Premiers pas en syntaxerrorisme</h2>
                <p class="text-gray-700 mb-4">Apprenez les bases du <strong class="text-blue-600">syntaxerrorisme</strong> avec des exemples concrets.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Intermédiaire</span>
                <h2 class="text-2xl font-bold text-blue-800 mt-4 mb-3">Automatiser le syntaxerrorisme</h2>
                <p class="text-gray-700 mb-4">Automatisez vos processus de <strong class="text-blue-600">syntaxerrorisme</strong> avec CI/CD.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Avancé</span>
                <h2 class="text-2xl font-bold text-blue-800 mt-4 mb-3">Syntaxerrorisme avancé</h2>
                <p class="text-gray-700 mb-4">Techniques expertes de <strong class="text-blue-600">syntaxerrorisme</strong> pour les professionnels.</p>
            </div>
        </div>
    </section>
</article>
@endsection
