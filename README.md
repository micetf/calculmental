# Calcul Mental — micetf.fr

Outil d'entraînement au calcul mental pour l'école primaire (CP → CM2).  
Permet aux élèves de s'entraîner en ligne (avec chronométrage et records)  
ou de générer des fiches imprimables au format PDF.

---

## Fonctionnalités

- Exercices de calcul mental pour les niveaux CP, CE1, CE2, CM1, CM2
- Chronométrage et enregistrement des records par fiche
- Génération de fiches PDF (questions + correction)
- Interface d'administration des statistiques (visites, records, impressions)

---

## Prérequis

- [Docker](https://www.docker.com/) et Docker Compose
- Git

---

## Installation et démarrage

### 1. Cloner le dépôt

```bash
git clone https://github.com/micetf/calculmental.git
cd calculmental
```

### 2. Configurer l'environnement

```bash
cp .env.example .env
```

Éditez `.env` et renseignez une valeur solide pour `APP_SECRET` :

```bash
# Générer un secret aléatoire
openssl rand -hex 32
```

```bash
# .env
APP_SECRET=collez-ici-la-valeur-générée
APP_ENV=development
```

### 3. Démarrer le conteneur

```bash
docker compose up --build -d
```

L'application est accessible sur `http://localhost:8080`.

### 4. Installer les dépendances PHP

```bash
docker exec -w /var/www/html <nom_du_conteneur> composer install
```

> Le nom du conteneur est visible via `docker ps` (colonne `NAMES`).

---

## Structure du projet

```
calculmental/
├── actions/                  # Contrôleurs et logique métier
│   ├── index.php             # Routeur principal
│   ├── accueillir.php        # Prépare les données de l'accueil
│   ├── calculer.php          # Prépare un exercice
│   ├── corriger.php          # Traite les réponses soumises
│   ├── reussir.php           # Enregistre les records
│   ├── imprimer.php          # Génère le PDF via FPDF
│   ├── melanger.php          # Mélange et organise les questions
│   ├── appreciation.php      # Messages d'appréciation
│   └── compteur/             # Classes de statistiques
│       ├── Reussite.php      # Records et moyennes par fiche
│       ├── Impression.php    # Comptage des impressions PDF
│       ├── Visiteur.php      # Comptage des visites
│       ├── index.php         # Interface admin (protégée)
│       └── purge.php         # Réinitialisation des records (protégée)
├── fiches/                   # Données des exercices par niveau
│   ├── classeur.php          # Scanner les fiches disponibles
│   ├── cp001.php             # Exemple : fiche CP n°001
│   └── ...                   # cp***, ce1***, ce2***, cm1***, cm2***
├── vues/                     # Templates d'affichage
│   ├── index.php             # Layout HTML global (navbar, scripts)
│   ├── accueillir.php        # Page d'accueil
│   ├── calculer.php          # Formulaire d'exercice
│   └── corriger.php          # Page de correction
├── assets/js/                # JavaScript applicatif
│   ├── contact.js            # Bouton contact (mailto obfusqué)
│   └── bof.js                # Protection anti-clickjacking
├── public/vendor/            # Dépendances frontend versionnées
│   ├── css/bootstrap.css     # Bootstrap 3.4.1
│   ├── js/                   # jQuery, Bootstrap JS, smooth-scroll
│   └── fonts/                # Glyphicons Bootstrap 3
├── vendor/fpdf/              # Librairie FPDF (génération PDF)
├── common/logos/             # Logo Creative Commons (footer PDF)
├── css/                      # Images et styles locaux
├── tests/                    # Tests PHPUnit
│   ├── AppreciationTest.php
│   ├── MelangerTest.php
│   └── ReussiteTest.php
├── scripts/                  # Scripts utilitaires
│   └── create-example-files.sh
├── Dockerfile
├── docker-compose.yml
├── composer.json
├── phpunit.xml
├── .env.example
└── .gitignore
```

---

## Lancer les tests

```bash
docker exec -w /var/www/html <nom_du_conteneur> vendor/bin/phpunit --testdox
```

→ 36 tests, 126 assertions.

---

## Accès administration

L'interface de statistiques est protégée par un cookie signé.

**Activer le mode admin :**

```
http://localhost:8080/?admin
```

**Accéder aux statistiques :**

```
http://localhost:8080/actions/compteur/index.php
```

**Réinitialiser les records :**

```
http://localhost:8080/actions/compteur/purge.php
```

> ⚠️ Ne jamais exposer `purge.php` sans protection en production.

---

## Variables d'environnement

| Variable     | Description                                  | Exemple                |
| ------------ | -------------------------------------------- | ---------------------- |
| `APP_SECRET` | Secret HMAC pour le cookie admin             | `openssl rand -hex 32` |
| `APP_ENV`    | Environnement (`development` / `production`) | `development`          |

---

## Architecture technique

L'application suit un pattern **MVC par inclusion** :

```
index.php → actions/index.php (routeur) → actions/{action}.php (contrôleur)
                                        ↓
                             vues/index.php (layout) → vues/{action}.php (vue)
```

**Persistance :** fichiers texte dans `actions/compteur/` (pas de base de données).  
**Sessions PHP :** utilisées pour stocker les solutions des exercices côté serveur.  
**PDF :** généré par FPDF 1.86, encodage ISO-8859-1.

---

## Branches Git

| Branche                       | Rôle                               |
| ----------------------------- | ---------------------------------- |
| `main`                        | Code de production                 |
| `legacy`                      | Archive de l'état original PHP 5.6 |
| `sprint/01-*` → `sprint/06-*` | Historique de la modernisation     |

---

## Licence

Application développée pour [micetf.fr](https://micetf.fr).  
Les fiches PDF générées sont sous licence  
[Creative Commons BY-NC 2.0 FR](http://creativecommons.org/licenses/by-nc/2.0/fr/).
