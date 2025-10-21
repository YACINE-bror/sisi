@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-flagflow-50 via-white to-accent-50 section-padding">
    <div class="container-custom text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
            Nos <span class="text-transparent bg-clip-text bg-gradient-to-r from-flagflow-600 to-accent-600">Projets Réalisés</span>
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Découvrez notre portfolio de projets innovants en IA, développement web, automatisation et solutions digitales qui ont transformé le business de nos clients.
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- ERP FlagFlow -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-flagflow-500 to-flagflow-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-flagflow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">ERP FlagFlow</h3>
                    <p class="text-flagflow-100">Solution ERP complète intégrant IA et automatisation</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Système de gestion d'entreprise intelligent avec modules intégrés pour la comptabilité, la gestion des stocks, les ressources humaines et l'analyse prédictive.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-flagflow-100 text-flagflow-700 text-sm rounded-full">ERP</span>
                        <span class="px-3 py-1 bg-flagflow-100 text-flagflow-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-flagflow-100 text-flagflow-700 text-sm rounded-full">Automatisation</span>
                    </div>
                </div>
            </div>

            <!-- Site Web -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-accent-500 to-accent-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Site Web</h3>
                    <p class="text-accent-100">Sites web modernes et responsifs</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Création de sites web professionnels avec design moderne, optimisation SEO et intégration de fonctionnalités avancées.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-accent-100 text-accent-700 text-sm rounded-full">Web Design</span>
                        <span class="px-3 py-1 bg-accent-100 text-accent-700 text-sm rounded-full">Responsive</span>
                        <span class="px-3 py-1 bg-accent-100 text-accent-700 text-sm rounded-full">SEO</span>
                    </div>
                </div>
            </div>

            <!-- Search Candidat par AI -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-green-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Search Candidat par AI</h3>
                    <p class="text-green-100">Recherche intelligente de candidats</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Système de recherche de candidats alimenté par l'IA pour analyser les profils et trouver les meilleures correspondances.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">RH</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">Matching</span>
                    </div>
                </div>
            </div>

            <!-- Analyse de CV -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Analyse de CV</h3>
                    <p class="text-purple-100">Analyse automatique des CV par IA</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Plateforme d'analyse de CV utilisant l'IA pour extraire les informations clés et évaluer la pertinence des candidatures.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">CV</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">Analyse</span>
                    </div>
                </div>
            </div>

            <!-- Assistance ERP par WhatsApp -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Assistance ERP par WhatsApp</h3>
                    <p class="text-green-100">Support client intégré WhatsApp</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Système d'assistance client intégré à WhatsApp pour un support ERP en temps réel et accessible partout.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">WhatsApp</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">Support</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">ERP</span>
                    </div>
                </div>
            </div>

            <!-- Chatbot Intelligent ERP -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Chatbot Intelligent ERP</h3>
                    <p class="text-blue-100">Accès total à tous les ERP</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Chatbot IA avancé capable d'accéder et d'interagir avec tous les systèmes ERP pour fournir des informations et exécuter des tâches.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Chatbot</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">ERP</span>
                    </div>
                </div>
            </div>

            <!-- SEO Automation -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">SEO Automation</h3>
                    <p class="text-orange-100">Automatisation du référencement</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Système automatisé d'optimisation SEO avec analyse continue, suggestions d'amélioration et suivi des performances.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full">SEO</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full">Automatisation</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full">Performance</span>
                    </div>
                </div>
            </div>

            <!-- GEO Automation -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-red-500 to-red-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">GEO Automation</h3>
                    <p class="text-red-100">Automatisation géolocalisée</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Solutions d'automatisation basées sur la géolocalisation pour optimiser les campagnes marketing et la logistique.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-100 text-red-700 text-sm rounded-full">GEO</span>
                        <span class="px-3 py-1 bg-red-100 text-red-700 text-sm rounded-full">Automatisation</span>
                        <span class="px-3 py-1 bg-red-100 text-red-700 text-sm rounded-full">Marketing</span>
                    </div>
                </div>
            </div>

            <!-- Search for Leads -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Search for Leads</h3>
                    <p class="text-indigo-100">Recherche automatisée de prospects</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Système intelligent de recherche et qualification de prospects avec scoring automatique et intégration CRM.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-sm rounded-full">Leads</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-sm rounded-full">Prospection</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-sm rounded-full">CRM</span>
                    </div>
                </div>
            </div>

            <!-- Automatise les Emails -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-teal-500 to-teal-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Automatise les Emails</h3>
                    <p class="text-teal-100">Campagnes email automatisées</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Plateforme d'automatisation des emails avec segmentation intelligente, personnalisation et suivi des performances.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 text-sm rounded-full">Email</span>
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 text-sm rounded-full">Automatisation</span>
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 text-sm rounded-full">Marketing</span>
                    </div>
                </div>
            </div>

            <!-- AI Agents Call -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-pink-500 to-pink-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">AI Agents Call</h3>
                    <p class="text-pink-100">Agents IA pour appels téléphoniques</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Agents IA intelligents capables de gérer des appels téléphoniques avec reconnaissance vocale et réponses naturelles.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm rounded-full">Téléphonie</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm rounded-full">Vocal</span>
                    </div>
                </div>
            </div>

            <!-- Marketing Automation WhatsApp -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-green-600 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Marketing Automation WhatsApp</h3>
                    <p class="text-green-100">Automatisation marketing WhatsApp</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Plateforme complète d'automatisation marketing sur WhatsApp avec segmentation, personnalisation et analytics.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">WhatsApp</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">Marketing</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">Automatisation</span>
                    </div>
                </div>
            </div>

            <!-- IT Help Desk Assistant -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-gray-600 to-gray-700 p-6">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">IT Help Desk Assistant</h3>
                    <p class="text-gray-100">Assistant support technique IA</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Assistant IA intelligent pour le support technique, capable de résoudre les problèmes courants et d'orienter vers les experts.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Support</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">IA</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Technique</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-gradient-to-r from-flagflow-600 to-accent-600 section-padding">
    <div class="container-custom text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Prêt à transformer votre business ?
        </h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-2xl mx-auto">
            Nos solutions ont déjà aidé de nombreuses entreprises. Contactez-nous pour discuter de votre projet et découvrir comment nous pouvons vous aider.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary">
                Démarrer un projet
            </a>
            <a href="{{ route('services') }}" class="btn-secondary">
                Voir nos services
            </a>
        </div>
    </div>
</section>
@endsection
