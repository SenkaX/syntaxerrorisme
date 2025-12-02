@extends('layout')

@section('content')
<article class="w-full">
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white drop-shadow-2xl">Contactez-nous</h1>
            <p class="text-xl text-blue-100">Nous sommes là pour vous aider avec le syntaxerrorisme</p>
        </div>
    </section>

    <section class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-blue-800 mb-6">Envoyez-nous un message</h2>
            <p class="text-gray-700 mb-6">Pour toute question sur le <strong class="text-blue-600">syntaxerrorisme</strong>, n'hésitez pas à nous contacter.</p>
            
            <div class="space-y-4">
                <div>
                    <h3 class="font-bold text-gray-800 mb-2">📧 Email</h3>
                    <p class="text-gray-700">contact@syntaxerrorisme.fr</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 mb-2">🐦 Twitter</h3>
                    <p class="text-gray-700">@syntaxerrorisme</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 mb-2">💼 LinkedIn</h3>
                    <p class="text-gray-700">linkedin.com/company/syntaxerrorisme</p>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection
