@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container-custom">
        <div class="animate-slide-up">
            <h1 class="hero-title">
                Nos <span class="text-gradient">Services</span> Professionnels
            </h1>
            <p class="hero-subtitle">
                Découvrez notre gamme complète de services pour digitaliser, automatiser et optimiser votre entreprise avec les dernières technologies IA
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid-auto-fit">
            
            <!-- Customer Services -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Customer Services</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Service client intelligent et personnalisé pour améliorer l'expérience utilisateur et augmenter la satisfaction client.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Support multilingue 24/7
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Chatbot IA intelligent
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Analyse des sentiments
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- Sites Web avec IA -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Sites Web avec IA</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Création de sites web modernes et intelligents intégrant des fonctionnalités d'intelligence artificielle avancées.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Design responsive et moderne
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Optimisation SEO automatique
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Personnalisation dynamique
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- Applications avec IA -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Applications avec IA</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Développement d'applications mobiles et web intelligentes avec fonctionnalités IA intégrées.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Applications cross-platform
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Reconnaissance vocale et visuelle
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Prédictions et recommandations
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- Agents IA -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Agents IA</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Création d'agents intelligents pour automatiser vos tâches quotidiennes et optimiser vos processus.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Automatisation des tâches
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Apprentissage continu
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Intégration multi-plateforme
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- Workflows Automatisés -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Workflows Automatisés</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Automatisation complète de vos processus métier pour plus d'efficacité et de productivité.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Orchestration des processus
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Monitoring en temps réel
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Optimisation automatique
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- Administration Réseau -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Administration Réseau</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Gestion intelligente de vos infrastructures réseau avec l'aide de l'IA pour une performance optimale.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Surveillance proactive
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Détection d'anomalies
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Maintenance prédictive
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

            <!-- SEO & GEO -->
            <div class="card card-hover p-8 text-center hover-lift">
                <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO & GEO</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Optimisation de votre visibilité en ligne avec des stratégies SEO et géolocalisation intelligentes.
                </p>
                <div class="space-y-3 mb-6 text-left">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Optimisation SEO avancée
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Stratégies géolocalisées
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Analytics et reporting
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary w-full">
                    Demander un devis
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-padding gradient-primary">
    <div class="container-custom">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Notre <span class="text-gradient">Processus</span> de Développement
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Une approche structurée et agile pour garantir la qualité et la satisfaction de nos clients
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Étape 1 -->
            <div class="text-center animate-slide-in-left">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                    1
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analyse & Conception</h3>
                <p class="text-gray-600">Étude approfondie de vos besoins et conception de la solution optimale</p>
            </div>
            
            <!-- Étape 2 -->
            <div class="text-center animate-slide-up">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-accent-500 to-accent-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                    2
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Développement</h3>
                <p class="text-gray-600">Création de votre solution avec les meilleures pratiques et technologies</p>
            </div>
            
            <!-- Étape 3 -->
            <div class="text-center animate-slide-up">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                    3
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Tests & Validation</h3>
                <p class="text-gray-600">Tests rigoureux et validation complète avant la mise en production</p>
            </div>
            
            <!-- Étape 4 -->
            <div class="text-center animate-slide-in-right">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                    4
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Déploiement & Support</h3>
                <p class="text-gray-600">Mise en ligne et support continu pour votre tranquillité</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding gradient-secondary">
    <div class="container-custom text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-slide-up">
            Prêt à commencer votre projet ?
        </h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-3xl mx-auto">
            Contactez-nous pour discuter de vos besoins et obtenir un devis personnalisé
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-accent">
                Demander un devis
            </a>
            <a href="{{ route('solutions') }}" class="btn-outline border-white text-white hover:bg-white hover:text-flagflow-600">
                Découvrir nos solutions
            </a>
        </div>
    </div>
</section>
@endsection
