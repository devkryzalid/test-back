# Test d'évènementiel

## les prérequis et la base

- php 8.0+
- Laravel 9
- Mysql

## Installation

Pour installer le projet:

- cloner le dépôt Git
- installer avec composer (laravel et les dépendances)
- exécuter seeds et migrations

## Consignes

Prenez le temps qu'il vous faut, l'important est que vous nous disiez combien de temps vous passer sur cette exercice et que vous répondiez aux maximums aux besoins demandés. N'hésitez pas à commenter votre code, compléter le readme, corriger le code existant, proposé des solutions, des améliorations...

## Demande

Le projets contient une liste d'évènements aléatoires. Le client aimerait ajouter un système de réservation de places. Pour le moment, les réservations ce feront par des courriels (non demandé ici) et seront payer sur places. Par la suite, Cashier pourrait être implémenté pour un paiement en ligne ainsi que divers mailer et notification.

Modifier le controller `EventController` pour afficher les évènements par date de début `start_date` croissante en affichant que les éléments à venir.

Ajouter un objet "réservation" dans une table `orders` (courriel du contact, le nom et prénom, la quantité de place à réserver, l'évènement à réserver et le prix total)
Pour ajouer une réservation, créer un point API REST avec les paramètres et l'ajout en base de données. Cette ajout peut être fait par formulaire sur le site ou par PostMan, comme vous préférez.

Ajouter au détail d'un évènement, dans un tableau, la liste des participants.

Ajouter à la liste des évènements, le nombre de participant par évènement.

Améliorer l'affichage et la clareté des évènements à l'aide de mutator ou de fonction diverse.

Commenter, expliquer, modifier, justifier, coder
