<?php

/** Indispensable pour l'autoload des class */
    require_once('Autoload.php');
    Autoload::register();
/***************************************** */

$kenny = new Personne();
$kenny->setPet("Minou");

echo $kenny->getPet()->getName() . "<br/>";
echo $kenny->getName() . "<br/>";

$bmw = new Voiture(100);
echo $bmw->getVitesse() . "<br/>";

$something = new Test("Portable");
echo $something->getSomething();






