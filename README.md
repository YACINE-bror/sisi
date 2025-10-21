# FlagFlow - Solutions IA et Digitales

FlagFlow est une entreprise spécialisée dans les solutions d'intelligence artificielle et digitales pour entreprises. Ce projet présente notre site web corporate avec toutes nos offres de services.

## 🚀 Fonctionnalités

### Pages Principales
- **Accueil** : Présentation de l'entreprise avec hero section et services
- **Services** : Détail de tous nos services (Customer Services, Sites Web IA, Applications IA, etc.)
- **Solutions IA** : Présentation de nos solutions d'intelligence artificielle
- **Maintenance** : Services de maintenance et support technique
- **Contact** : Formulaire de contact et informations de l'entreprise

### Services Proposés
- Customer Services avec IA
- Création de sites web avec intégration IA
- Développement d'applications intelligentes
- Création d'agents IA
- Workflows automatisés
- Administration réseau à distance avec IA
- SEO et GEO automatisés
- IT Help Desk Assistant

### Solutions IA
- ERP FlagFlow
- Recherche de candidats par IA
- Analyse de CV
- Assistance ERP par WhatsApp
- Chatbot intelligent avec accès ERP
- Marketing automation WhatsApp
- Agents d'appel IA

## 🛠️ Technologies Utilisées

- **Backend** : Laravel 12
- **Frontend** : Tailwind CSS
- **JavaScript** : Vanilla JS + Vite
- **Base de données** : SQLite (développement)
- **Serveur** : Serveur de développement Laravel

## 📋 Prérequis

- PHP 8.2+
- Composer
- Node.js 18+
- npm ou yarn

## 🚀 Installation

### 1. Cloner le projet
```bash
git clone <repository-url>
cd flagflow
```

### 2. Installer les dépendances PHP
```bash
composer install
```

### 3. Installer les dépendances Node.js
```bash
npm install
```

### 4. Configuration de l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Base de données
```bash
php artisan migrate
```

### 6. Construire les assets
```bash
npm run build
```

## 🎯 Utilisation

### Développement
```bash
# Démarrer le serveur de développement
php artisan serve

# Dans un autre terminal, surveiller les changements CSS/JS
npm run watch
```

### Production
```bash
npm run build
```

## 📁 Structure du Projet

```
flagflow/
├── app/
│   └── Http/Controllers/
│       ├── HomeController.php
│       └── ContactController.php
├── resources/
│   ├── css/
│   │   └── app.css          # Styles Tailwind CSS
│   ├── js/
│   │   └── app.js           # JavaScript principal
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php # Layout principal
│       ├── home.blade.php    # Page d'accueil
│       ├── services.blade.php # Page services
│       ├── solutions.blade.php # Page solutions IA
│       ├── maintenance.blade.php # Page maintenance
│       └── contact.blade.php # Page contact
├── routes/
│   └── web.php              # Routes web
├── tailwind.config.js        # Configuration Tailwind
├── postcss.config.js         # Configuration PostCSS
├── vite.config.js            # Configuration Vite
└── package.json              # Dépendances Node.js
```

## 🎨 Personnalisation

### Couleurs
Les couleurs principales sont définies dans `tailwind.config.js` :
- **FlagFlow** : Bleu (#0ea5e9)
- **Accent** : Rose/Magenta (#d946ef)

### Styles
Les styles personnalisés sont dans `resources/css/app.css` avec des classes utilitaires :
- `.btn-primary` : Bouton principal
- `.btn-secondary` : Bouton secondaire
- `.section-padding` : Padding de section
- `.container-custom` : Container personnalisé

## 📱 Responsive Design

Le site est entièrement responsive avec :
- Mobile-first approach
- Breakpoints Tailwind CSS
- Navigation mobile adaptée
- Grilles flexibles

## 🔧 Configuration

### Variables d'environnement
```env
APP_NAME=FlagFlow
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

### Base de données
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

## 🚀 Déploiement

### Production
1. Configurer l'environnement de production
2. Optimiser les assets : `npm run build`
3. Configurer le serveur web (Apache/Nginx)
4. Définir les permissions appropriées

### Serveur de production
```bash
# Optimiser l'application
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## � Déployer sur Google Cloud Run (CI-ready)

Ce dépôt contient désormais un `Dockerfile` de production, des fichiers de configuration sous `docker/` et un `cloudbuild.yaml` / GitHub Actions workflow pour déployer automatiquement sur Cloud Run.

Résumé des étapes pour mettre en place GitHub → Cloud Run :

1. Créez un dépôt GitHub et poussez ce projet.
2. Activez l'API Cloud Run, Cloud Build et Container Registry / Artifact Registry dans votre projet GCP.
3. Configurez un compte de service avec les rôles Cloud Run Admin, Cloud Build Editor, Storage Admin (si utilisé) et Cloud SQL Client (si besoin).
4. Ajoutez les secrets GitHub suivants (Repository Settings → Secrets):
	- `GCP_PROJECT_ID` : votre projet GCP
	- `GCP_REGION` : région (ex: us-central1)
	- `GCP_SA_KEY` : clé JSON du compte de service encodée (Service Account JSON)

Déploiement manuel (PowerShell):
```powershell
Set-Location 'e:\flagflow\flagflow'
# Build and push image with Cloud Build
gcloud builds submit --tag gcr.io/PROJECT_ID/flagflow:latest

# Deploy to Cloud Run (attach Cloud SQL instances with --add-cloudsql-instances if needed)
gcloud run deploy flagflow --image gcr.io/PROJECT_ID/flagflow:latest --region us-central1 --platform managed --allow-unauthenticated
```

Vous pouvez aussi créer un trigger Cloud Build lié à votre dépôt GitHub qui utilisera `cloudbuild.yaml` pour construire et déployer automatiquement à chaque push sur `main`.

Notes de production:
- N'utilisez pas le stockage de fichiers local pour les uploads (utilisez Cloud Storage).
- Configurez `APP_KEY`, `DB_*`, `SESSION_DRIVER`, `CACHE_DRIVER` via Secret Manager ou variables d'environnement dans Cloud Run.
- Exécutez `php artisan migrate` via Cloud Run Job ou via `gcloud run jobs execute`.


## �📞 Support

Pour toute question ou support :
- Email : contact@flagflow.com
- Support : support@flagflow.com
- Téléphone : +33 1 23 45 67 89

## 📄 Licence

Ce projet est propriétaire de FlagFlow. Tous droits réservés.

## 🤝 Contribution

Ce projet est un site corporate et n'accepte pas de contributions externes.

---

**FlagFlow** - Transformez votre entreprise avec l'IA 🚀
