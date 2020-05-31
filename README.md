## polytest
TEST - Concours 1341 : Analyste technologie numérique
Author: Rais Boualem
Date: 27-05-2020

## 1--Les versions utiliser
PHP ==> PHP 7.2.28 (cli) (built: Feb 18 2020 12:54:18) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies

LARAVEL ==>	php artisan --version

COMPOSER ==> Composer version 1.9.1

Systeme d'exploitation ==> Nom du système d’exploitation:              Microsoft Windows 10 Famille
Version du système:                         10.0.17134 N/A version 17134

##2--Les contributeur (simuler un scenario developpeur et repository owner (validateur))
kenziproweb(rais boualem) ==> ce compte utiliser comme le compte developpeur
raisboualem25(rais boualem) ==> ce compte utiliser comme le proprietaire du repositoire et comme le validateur du code (pull request)

##3--Les Branches 
br_01 ==> pour le developpement

develop ==> pour le staging

master ==> pour la production

##4--installation et execution du projet
4-1- assurer d avoir la configuration la plus proches possible du point 1 (php)
4-2- cloner le repositoire 'git clone https://github.com/raisboualem25/polytest.git'
4-3- aller au repetoire cloner '**/polytest' ==> 'cd polytest'
4-4- lancer l'invite de commandes (cmd) dans ce repertoire
4-5- execute 'composer install' (Installer les dépendances du projet à partir de composer )
4-6- creer le fichier .env 'copy .env.example .env'
4-7- generer votre cle d'encryption 'php artisan key:generate'
4-8- lancer le serveur laravel 'php artisan serve' c est pour lancer Laravel development server 
4-9- utiliser votre navigateur prefere pour lancer l'url generer par  laravel serve ex:  http://127.0.0.1:8000




