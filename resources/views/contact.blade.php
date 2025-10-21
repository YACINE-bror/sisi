@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-flagflow-50 via-white to-accent-50 section-padding">
    <div class="container-custom text-center">
        <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-flagflow-600 to-accent-600">Contactez</span> FlagFlow
        </h1>
        <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
            Prêt à transformer votre entreprise avec l'IA ? Contactez-nous pour discuter de vos projets 
            et découvrir comment nous pouvons vous aider à atteindre vos objectifs.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Prénom *</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Votre prénom">
                        </div>
                        
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nom *</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Votre nom">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                               placeholder="votre@email.com">
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Entreprise</label>
                        <input type="text" id="company" name="company" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                               placeholder="Nom de votre entreprise">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                                 <input type="tel" id="phone" name="phone" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                                placeholder="+212 615 544 772">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service d'intérêt *</label>
                        <select id="service" name="service" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300">
                            <option value="">Sélectionnez un service</option>
                            <option value="customer_services">Customer Services</option>
                            <option value="web_development">Sites Web avec IA</option>
                            <option value="app_development">Applications avec IA</option>
                            <option value="ai_agents">Agents IA</option>
                            <option value="workflows">Workflows Automatisés</option>
                            <option value="network_admin">Administration Réseau</option>
                            <option value="seo_geo">SEO & GEO</option>
                            <option value="maintenance">Maintenance & Support</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-flagflow-500 focus:border-transparent transition-all duration-300"
                                  placeholder="Décrivez votre projet ou votre besoin..."></textarea>
                    </div>

                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="privacy" name="privacy" required 
                               class="mt-1 w-4 h-4 text-flagflow-600 border-gray-300 rounded focus:ring-flagflow-500">
                        <label for="privacy" class="text-sm text-gray-600">
                            J'accepte que FlagFlow traite mes données personnelles conformément à la 
                            <a href="#" class="text-flagflow-600 hover:text-flagflow-700 underline">politique de confidentialité</a> *
                        </label>
                    </div>

                    <button type="submit" class="w-full btn-primary text-lg py-4">
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Informations de contact</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Notre équipe d'experts est là pour vous accompagner dans la réalisation de vos projets. 
                        N'hésitez pas à nous contacter par le moyen qui vous convient le mieux.
                    </p>
                </div>

                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                                                 <div>
                             <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                             <p class="text-gray-600">contact@flag-flow.com</p>
                             <p class="text-gray-600">support@flag-flow.com</p>
                         </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-accent-500 to-accent-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                                                 <div>
                             <h3 class="text-lg font-semibold text-gray-900 mb-2">Téléphone</h3>
                             <p class="text-gray-600">+212 615 544 772</p>
                             <p class="text-gray-600">+212 615 544 773</p>
                         </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                                                 <div>
                             <h3 class="text-lg font-semibold text-gray-900 mb-2">Adresse</h3>
                             <p class="text-gray-600">Avenue Mohammed V</p>
                             <p class="text-gray-600">Rabat, Maroc</p>
                         </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-accent-500 to-accent-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Horaires d'ouverture</h3>
                            <p class="text-gray-600">Lundi - Vendredi: 9h00 - 18h00</p>
                            <p class="text-gray-600">Support technique: 24h/24, 7j/7</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-xl flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-accent-500 to-accent-600 rounded-xl flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.047-1.856-3.047-1.856 0-2.136 1.445-2.136 2.939v5.677H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-flagflow-500 to-flagflow-600 rounded-xl flex items-center justify-center hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Questions Fréquentes</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Trouvez rapidement des réponses à vos questions les plus courantes
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Combien de temps faut-il pour développer une solution IA ?</h3>
                <p class="text-gray-600">
                    Le délai de développement varie selon la complexité du projet. Une solution simple peut prendre 2-4 semaines, 
                    tandis qu'un projet complexe peut nécessiter 3-6 mois. Nous vous fournissons un planning détaillé lors de la phase de consultation.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Proposez-vous un support après la livraison ?</h3>
                <p class="text-gray-600">
                    Oui, nous offrons un support complet après la livraison, incluant la maintenance, les mises à jour, 
                    et l'assistance technique. Nos forfaits de support sont flexibles et adaptés à vos besoins.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Vos solutions sont-elles compatibles avec nos systèmes existants ?</h3>
                <p class="text-gray-600">
                    Absolument ! Nous nous spécialisons dans l'intégration avec les systèmes existants. 
                    Nos solutions sont conçues pour s'interfacer avec la plupart des ERP, CRM et autres outils métier.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Proposez-vous des formations pour nos équipes ?</h3>
                <p class="text-gray-600">
                    Oui, nous proposons des programmes de formation personnalisés pour vos équipes, 
                    incluant l'utilisation des nouvelles solutions et les bonnes pratiques d'IA.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-flagflow-600 to-accent-600">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Prêt à commencer votre projet ?</h2>
        <p class="text-xl text-flagflow-100 mb-8 max-w-3xl mx-auto">
            Contactez-nous dès aujourd'hui pour une consultation gratuite et découvrez comment 
            l'IA peut transformer votre entreprise
        </p>
        <a href="#contact-form" class="bg-white text-flagflow-600 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 text-lg">
            Commencer maintenant
        </a>
    </div>
</section>
@endsection
