@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-flagflow-50 via-white to-accent-50 section-padding">
    <div class="container-custom text-center">
        <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-flagflow-600 to-accent-600">Maintenance</span> & Support
        </h1>
        <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
            Maintenance préventive, support technique et administration système avec l'aide de l'IA 
            pour garantir la continuité de vos services
        </p>
    </div>
</section>

<!-- Maintenance Services -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Services de Maintenance</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Une approche proactive et intelligente pour maintenir vos systèmes en parfait état
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Maintenance Préventive -->
            <div class="bg-gradient-to-br from-flagflow-50 to-flagflow-100 rounded-3xl p-8">
                <div class="w-20 h-20 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.372-.836 1.372-2.942-.734-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Maintenance Préventive</h3>
                <p class="text-gray-600 mb-6 text-lg">
                    Surveillance continue et maintenance proactive de vos infrastructures pour éviter les pannes.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-flagflow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Monitoring 24/7 des systèmes
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-flagflow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Détection préventive des anomalies
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-flagflow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Mises à jour automatiques
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-flagflow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Rapports de santé système
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary">Demander un devis</a>
            </div>

            <!-- Support Technique -->
            <div class="bg-gradient-to-br from-accent-50 to-accent-100 rounded-3xl p-8">
                <div class="w-20 h-20 bg-gradient-to-r from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm-1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Support Technique</h3>
                <p class="text-gray-600 mb-6 text-lg">
                    Support technique spécialisé disponible 24/7 pour résoudre vos problèmes rapidement.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-accent-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Support 24/7 multilingue
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-accent-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Résolution à distance
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-accent-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Tickets prioritaires
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-accent-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Documentation technique
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary">Demander un devis</a>
            </div>
        </div>
    </div>
</section>

<!-- IT Help Desk Assistant -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-gray-900">Assistant IT Help Desk IA</h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Notre assistant intelligent révolutionne la gestion des tickets de support en automatisant 
                    la résolution des problèmes courants et en orientant efficacement les demandes complexes.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white text-sm font-bold">1</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Diagnostic Automatique</h3>
                            <p class="text-gray-600">Analyse intelligente des problèmes et identification automatique des solutions</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-accent-500 to-accent-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white text-sm font-bold">2</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Résolution en Temps Réel</h3>
                            <p class="text-gray-600">Résolution immédiate de 80% des problèmes courants sans intervention humaine</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white text-sm font-bold">3</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Escalade Intelligente</h3>
                            <p class="text-gray-600">Transfert automatique vers les experts humains pour les cas complexes</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn-primary inline-block">
                    Découvrir l'assistant
                </a>
            </div>

            <!-- Visualization -->
            <div class="relative">
                <div class="bg-gradient-to-br from-flagflow-400 to-accent-500 rounded-3xl p-8 shadow-2xl">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-900">IT Help Desk</h4>
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-flagflow-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-flagflow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="bg-gray-100 rounded-lg px-3 py-2 max-w-xs">
                                    <p class="text-sm text-gray-700">Bonjour ! Comment puis-je vous aider ?</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 justify-end">
                                <div class="bg-flagflow-100 rounded-lg px-3 py-2 max-w-xs">
                                    <p class="text-sm text-flagflow-700">Mon ordinateur est lent</p>
                                </div>
                                <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-accent-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-flagflow-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-flagflow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="bg-gray-100 rounded-lg px-3 py-2 max-w-xs">
                                    <p class="text-sm text-gray-700">Je vais diagnostiquer votre système...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Floating elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-r from-accent-400 to-flagflow-400 rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-r from-flagflow-400 to-accent-400 rounded-full opacity-20 animate-pulse delay-1000"></div>
            </div>
        </div>
    </div>
</section>

<!-- Network Administration -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Administration Réseau Intelligente</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Gestion proactive de vos infrastructures réseau avec l'aide de l'intelligence artificielle
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Monitoring Intelligent -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Monitoring Intelligent</h3>
                <p class="text-gray-600">Surveillance continue avec détection automatique des anomalies et alertes prédictives</p>
            </div>

            <!-- Sécurité Avancée -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.451-4.351 9.75-9.75 9.75S.25 12.451.25 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Sécurité Avancée</h3>
                <p class="text-gray-600">Protection proactive contre les menaces avec analyse comportementale IA</p>
            </div>

            <!-- Optimisation Automatique -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Optimisation Automatique</h3>
                <p class="text-gray-600">Ajustement automatique des paramètres réseau pour des performances optimales</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-flagflow-600 to-accent-600">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Besoin d'une maintenance intelligente ?</h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-3xl mx-auto">
            Protégez vos systèmes et optimisez vos performances avec nos services de maintenance IA. 
            Contactez-nous pour un audit gratuit.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-flagflow-600 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 text-lg">
                Demander un audit gratuit
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white hover:bg-white hover:text-flagflow-600 font-semibold py-4 px-8 rounded-lg transition-all duration-300 text-lg">
                Voir nos services
            </a>
        </div>
    </div>
</section>
@endsection
