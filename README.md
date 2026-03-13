# PrestaShop - Test Technique (Presta-site)

Projet d'initialisation et de personnalisation d'une boutique PrestaShop avec un thème enfant basé sur **Hummingbird**.

## 🛠 Prérequis
- **Docker Desktop** avec le moteur **WSL2** activé.
- **Git** (installé dans votre distribution WSL de préférence).

## 🚀 Installation rapide
1. **Cloner le projet :**
```bash
    git clone https://github.com
    cd presta-site
```

2. **Lancer les containers :**
```bash
    docker-compose up -d
```

2. **Importer la base de données :**
Le projet inclut un export dans db/prestashop.zip. Importez-le via Adminer/PhpMyAdmin sur localhost:8081 ou via la ligne de commande.

3. **Accès :**
- Front-Office : http://localhost:8080
- Back-Office : http://localhost:8080/admin-dev

## 🔑 Accès (Back-Office & Front-Office)
URL Boutique : http://localhost:8080
URL Administration : http://localhost:8080/admin-dev
Email : admin@presta-site.com
Mot de passe : admin@presta-site.com


## 🎨 Customisations (Thème Enfant)

Toutes les modifications sont isolées dans le dossier /themes/hummingbird-child/ :

- Header : Ajout d'un bandeau "Code Promo" via header.tpl.
- Fiche Produit : Insertion du bloc "Info livraison" (Livraison 48h) via product.tpl.
- Footer : Ajout d'un copyright personnalisé via footer.tpl.
- CSS : Intégration de styles spécifiques dans assets/css/custom.css.

## ⚠️ Problèmes de Permissions (WSL2 / Docker)

Si vous obtenez des erreurs de type Permission denied lors de la modification des fichiers ou du vidage du cache, exécutez ces commandes depuis votre terminal WSL :

```bash
    # Réattribuer la propriété à votre utilisateur actuel
    sudo chown -R $USER:$USER ./themes/hummingbird-child

    # Donner les droits d'écriture complets sur les assets et le cache
    sudo chmod -R 777 ./themes/hummingbird-child/assets
    sudo chmod -R 777 ./themes/hummingbird-child/assets/cache
```