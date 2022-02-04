<?php

/**
 * 1. Créez une classe VOD et définissez les propriétés suivantes :
 *    - Créez une propriété films qui sera un tableau contenant 5 noms de films au choix.
 *    - Créez une propriété tarif qui contiendra........ le tarif de l'abonnement
 *    - Créez une propriété statique qui contiendra le nombre total d'abonnés de la plateforme ( total d'abonnés VOD dans le cas de la classe mère )
 *    - Définissez vos setters et vos getters.
 *    - Créez en plus une méthode statique permettant de mettre à jour la propriété statique du nombre total d'abonnés sur TOUTES les plateformes. ( addAbo() ou je ne sais quoi )
 *    - Créez une méthode permettant de récupérer cette valeur, toujours en statique.
 *
 * 2. Créez une instance VOD ayant le nom $netflix et initialisez la comme nous l'avons vu (dans index.php).
 *
 * 3. Créez une instance VOD ayant le nom $prime et initialisez la comme nous l'avons vu (dans index.php).
 *
 * 4. Invoquez la méthode addAbo() plusieurs fois pour les les objets créés, le nombre de fois n'a pas d'importance.
 *
 * 5. Invoquez la méthode vous permettant de récupérer le nombre total d'abonnements aux plateformes VOD de manière à afficher le nombre total d'abonnements.
 */

require __DIR__ . '/Classes/VOD.php';

$netflixFilms = [
    "Spider-Man",
    "La ligne verte",
    "Breaking bad",
    "Desperate housewives",
    "Inception"
];
$netflix = new VOD($netflixFilms, 10);

$primeFilms = [
    "The witcher",
    "Hell boy",
    "Captain America",
    "Iron-Man",
    "The blind side"
];
$prime = new VOD($primeFilms, 12);

$netflix->addAbo();
$netflix->addAbo();
$netflix->addAbo();
$netflix->addAbo();


$prime->addAbo();
$prime->addAbo();
$prime->addAbo();
$prime->addAbo();
$prime->addAbo();
$prime->addAbo();
$prime->addAbo();


echo VOD::getTotalSubscribers();