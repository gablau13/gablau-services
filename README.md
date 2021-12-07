# gablau-services

gablau-services est une application permettant la vente en ligne de divers articles.


## Environnement de développement
-prérequis
   *PHP 8.0.5
   *Composer
   Symfony CLI

vous pouvez vérifier les prérequis avec la commande suivant:
  '''bash
  symfony check:requirements

### Lancer l'environnement de développement
   '''bash
   symfony serve -d

#### Installation de webpack et bootstrap5

.Webpack
   '''bash
   composer require symfony/webpack-encore-bundle
   npm install
   npm run build

Dans le fichier  webpack.config.js:
   module.exports={
       plugins:{
           autoprefixer{}
       }
   }

.Bootstrap5
      npm install bootstrap5
      npm install @popperjs/core
