
# Application Web de Gestion de Salle de Sport


Ce projet a pour objectif de développer une application web pour moderniser le système de gestion d'une salle de sport. Actuellement, les opérations sont effectuées manuellement, ce qui entraîne des erreurs. L'application vise à fournir une solution permettant de :
Gérer les membres inscrits,
Planifier et afficher les activités et équipements et 
Permettre aux membres de réserver des activités et équipements.

## Fonctionnalités :

**Gestion des Membres :**

Inscription, authentification et gestion des données des membres.

**Gestion des Activités :**

Ajout, modification et suppression d'activités.

**Réservation :**

Système de réservation pour les membres, avec un affichage dynamique des réservations et activités disponibles.

## Schéma de la Base de Données :

**Entités Principales :**

- Membres

- Activités

- Réservations

## Relations :

- Un membre peut réaliser plusieurs réservations.

- Une activité peut avoir plusieurs réservations associées.

## Diagrammes :
- **Diagramme ERD :** Modélisation de la base de données basée sur les entités et leurs relations.

- **Diagramme UML** (Cas d'utilisation) : Identification des acteurs (membres, administrateurs) et des interactions avec le système.

## Configuration de l’Environnement

- **Logiciels Requis :**

        -Serveur local (XAMPP, MAMP)
        -Éditeur de code (Visual Studio Code ou équivalent)

## Scripts SQL :

- Création des tables nécessaires.
- Scripts pour opérations d’insertion, de mise à jour et de suppression.
- Jointures externe entre les tables.
## Développement en PHP :
- Formulaires pour ajouter des membres, activités et réservations.
- Affichage dynamique des listes de membres, d'activités et de réservations.
## Bonus :
- Fonctionnalités Supplémentaires :
- Modification et suppression de données.
- Recherche par critères.