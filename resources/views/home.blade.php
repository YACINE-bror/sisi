@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container-custom">
        <div class="animate-slide-up">
            <h1 class="hero-title">
                Boostez votre <span class="text-gradient">business</span> avec nos solutions <span class="text-gradient">IA et digitales</span>
            </h1>
            <p class="hero-subtitle">
                Sites web, applications, automatisations, IA, maintenance réseau & systèmes. 
                Transformez votre entreprise avec des technologies de pointe.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="btn-primary">
                    Commencer un projet
                </a>
                <a href="{{ route('services') }}" class="btn-secondary">
                    Découvrir nos services
                </a>
            </div>
        </div>
        
        <!-- Hero Visual -->
        <div class="mt-16 animate-float">
            <div class="relative max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <!-- Laptop -->
                    <div class="text-center animate-slide-in-left">
                        <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Sites Web</h3>
                    </div>
                    
                    <!-- Smartphone -->
                    <div class="text-center animate-slide-up">
                        <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Applications</h3>
                    </div>
                    
                    <!-- Server -->
                    <div class="text-center animate-slide-in-right">
                        <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Infrastructure</h3>
                    </div>
                </div>
                
                <!-- AI Brain Center -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate-pulse">
                    <div class="w-32 h-32 bg-gradient-to-br from-flagflow-500 to-accent-500 rounded-full flex items-center justify-center shadow-2xl">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Points Forts Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Pourquoi choisir <span class="text-gradient">FlagFlow</span> ?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Notre expertise et notre approche innovante font la différence dans tous nos projets
            </p>
        </div>
        
        <div class="feature-grid">
            <!-- Rapidité -->
            <div class="feature-card animate-slide-in-left">
                <div class="feature-icon">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Rapidité</h3>
                <p class="text-gray-600">
                    Développement agile et déploiement rapide pour accélérer votre time-to-market
                </p>
            </div>
            
            <!-- Personnalisation -->
            <div class="feature-card animate-slide-up">
                <div class="feature-icon">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Personnalisation</h3>
                <p class="text-gray-600">
                    Solutions sur mesure adaptées à vos besoins spécifiques et à votre secteur d'activité
                </p>
            </div>
            
            <!-- Sécurité -->
            <div class="feature-card animate-slide-up">
                <div class="feature-icon">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Sécurité</h3>
                <p class="text-gray-600">
                    Protection maximale de vos données avec les dernières technologies de sécurité
                </p>
            </div>
            
            <!-- Support 24/7 -->
            <div class="feature-card animate-slide-in-right">
                <div class="feature-icon">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Support 24/7</h3>
                <p class="text-gray-600">
                    Assistance technique disponible 24h/24 et 7j/7 pour garantir la continuité de vos services
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="section-padding gradient-primary">
    <div class="container-custom">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Nos <span class="text-gradient">Services</span> Principaux
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Découvrez notre gamme complète de services pour digitaliser et optimiser votre entreprise
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Customer Services -->
            <div class="card card-hover p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Services</h3>
                <p class="text-gray-600 mb-4">Support client optimisé avec IA pour une expérience utilisateur exceptionnelle</p>
                <a href="{{ route('services') }}" class="btn-outline">En savoir plus</a>
            </div>
            
            <!-- Sites Web avec IA -->
            <div class="card card-hover p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sites Web avec IA</h3>
                <p class="text-gray-600 mb-4">Sites web intelligents et personnalisés avec intégration d'IA avancée</p>
                <a href="{{ route('services') }}" class="btn-outline">En savoir plus</a>
            </div>
            
            <!-- Applications avec IA -->
            <div class="card card-hover p-6 text-center hover-lift">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Applications avec IA</h3>
                <p class="text-gray-600 mb-4">Applications mobiles et web intelligentes avec fonctionnalités IA intégrées</p>
                <a href="{{ route('services') }}" class="btn-outline">En savoir plus</a>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="btn-primary">
                Voir tous nos services
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="stats-grid">
            <div class="stat-item animate-slide-in-left">
                <div class="stat-number">500+</div>
                <div class="stat-label">Projets réalisés</div>
            </div>
            <div class="stat-item animate-slide-up">
                <div class="stat-number">98%</div>
                <div class="stat-label">Clients satisfaits</div>
            </div>
            <div class="stat-item animate-slide-up">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support disponible</div>
            </div>
            <div class="stat-item animate-slide-in-right">
                <div class="stat-number">5+</div>
                <div class="stat-label">Années d'expérience</div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding gradient-secondary">
    <div class="container-custom text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-slide-up">
            Prêt à transformer votre business ?
        </h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-3xl mx-auto">
            Rejoignez les centaines d'entreprises qui ont déjà fait confiance à FlagFlow pour leur transformation digitale
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-accent">
                Démarrer maintenant
            </a>
            <a href="{{ route('projects') }}" class="btn-outline border-white text-white hover:bg-white hover:text-flagflow-600">
                Voir nos réalisations
            </a>
        </div>
    </div>
</section>
@endsection
