@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container-custom">
        <div class="animate-slide-up">
            <h1 class="hero-title">
                Solutions <span class="text-gradient">IA Avancées</span>
            </h1>
            <p class="hero-subtitle">
                Découvrez nos solutions d'intelligence artificielle révolutionnaires qui transforment votre business et automatisent vos processus
            </p>
        </div>
    </div>
</section>

<!-- AI Solutions Grid -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid-auto-fit">
            
            <!-- ERP FlagFlow -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">ERP FlagFlow</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Système de gestion d'entreprise intelligent avec modules intégrés et analyse prédictive avancée.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Gestion comptable automatisée
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Analyse prédictive des ventes
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Optimisation des stocks
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir l'ERP
                </a>
            </div>

            <!-- Recherche de Candidats IA -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Recherche de Candidats IA</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Plateforme intelligente de recrutement utilisant l'IA pour trouver les meilleurs talents.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Matching intelligent des profils
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Analyse des compétences
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Scoring automatique
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir la solution
                </a>
            </div>

            <!-- Analyse de CV -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Analyse de CV</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Système d'analyse automatique des CV avec extraction intelligente des informations clés.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Extraction automatique des données
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Évaluation des compétences
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Comparaison des profils
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir la solution
                </a>
            </div>

            <!-- Assistance ERP WhatsApp -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-green-400 to-green-500 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Assistance ERP WhatsApp</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Support client intégré à WhatsApp pour un accès facile à votre ERP depuis n'importe où.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Support en temps réel
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Accès mobile à l'ERP
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Notifications automatiques
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir la solution
                </a>
            </div>

            <!-- Chatbot Intelligent -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Chatbot Intelligent</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Chatbot IA avancé capable d'accéder et d'interagir avec tous les systèmes ERP.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Accès total aux ERP
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Exécution de tâches
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Apprentissage continu
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir la solution
                </a>
            </div>

            <!-- Automatisation SEO -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Automatisation SEO</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Optimisation automatique du référencement avec analyse continue et suggestions intelligentes.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Analyse continue des performances
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Suggestions d'amélioration
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Optimisation automatique
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Découvrir la solution
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Fonctionnalités IA Avancées -->
<section class="section-padding gradient-primary">
    <div class="container-custom">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Fonctionnalités <span class="text-gradient">IA Avancées</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Nos solutions intègrent les technologies d'intelligence artificielle les plus récentes
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Machine Learning -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Machine Learning</h3>
                <p class="text-gray-600">Algorithmes d'apprentissage automatique pour l'amélioration continue</p>
            </div>
            
            <!-- NLP -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Traitement du Langage</h3>
                <p class="text-gray-600">Compréhension et génération de texte naturel avancée</p>
            </div>
            
            <!-- Computer Vision -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Vision par Ordinateur</h3>
                <p class="text-gray-600">Analyse et reconnaissance d'images et de vidéos</p>
            </div>
            
            <!-- Predictive Analytics -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analytics Prédictifs</h3>
                <p class="text-gray-600">Prédictions basées sur l'analyse des données historiques</p>
            </div>
            
            <!-- Automation -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Automatisation Intelligente</h3>
                <p class="text-gray-600">Automatisation des processus avec prise de décision IA</p>
            </div>
            
            <!-- Security AI -->
            <div class="card p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sécurité IA</h3>
                <p class="text-gray-600">Détection et prévention des menaces en temps réel</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding gradient-secondary">
    <div class="container-custom text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-slide-up">
            Prêt à adopter l'IA ?
        </h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-3xl mx-auto">
            Transformez votre entreprise avec nos solutions d'intelligence artificielle de pointe
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-accent">
                Démarrer un projet IA
            </a>
            <a href="{{ route('projects') }}" class="btn-outline border-white text-white hover:bg-white hover:text-flagflow-600">
                Voir nos réalisations
            </a>
        </div>
    </div>
</section>
@endsection
