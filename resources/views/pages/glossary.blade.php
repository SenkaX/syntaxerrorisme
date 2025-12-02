@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Glossaire Syntaxerrorisme</h1>
            <p class="text-xl text-blue-100">Termes et définitions</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <dl class="space-y-6">
                <div>
                    <dt class="text-xl font-bold text-blue-800 mb-2">Syntaxerrorisme</dt>
                    <dd class="text-gray-700">Art de comprendre et résoudre les erreurs de syntaxe dans le code.</dd>
                </div>
                <div>
                    <dt class="text-xl font-bold text-blue-800 mb-2">Débogage</dt>
                    <dd class="text-gray-700">Processus de détection et correction d'erreurs dans le <strong class="text-blue-600">syntaxerrorisme</strong>.</dd>
                </div>
                <div>
                    <dt class="text-xl font-bold text-blue-800 mb-2">Linter</dt>
                    <dd class="text-gray-700">Outil d'analyse statique utilisé dans le <strong class="text-blue-600">syntaxerrorisme</strong>.</dd>
                </div>
            </dl>
        </div>
    </section>
</article>
@endsection
