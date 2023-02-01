<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require_once ('Maison.php');
require_once ('Appartement.php');

$first = new Maison ('France','Le Cateau','59360','4','7',true,'2',false);
$second = new Maison('France','Solre le Château','59740','3','6',false,'2',false);

$Third = new Appartement('France','Avesnes sur Helpe','59440','4','6',false);

//Invoquer les méthodes Get
echo 'Pays : ' . $first->getPays() . '<br>';
echo 'Ville : ' . $first->getVille() . '<br>';
echo 'Code Postal : ' . $first->getPostal() . '<br>';
echo 'Nombre de chambres : ' . $first->getChambres() . '<br>';
echo 'Nombre de pièces : ' . $first->getPiece() . '<br>';
echo 'Jardin : ' . ($first->isJardin() ? 'Oui' : 'Non') . '<br>';
echo 'Nombre d\'étages : ' . $first->getEtages() . '<br>';
echo 'Garage : ' . ($first->isGarage() ? 'Oui' : 'Non') . '<br>';

echo 'Pays : ' . $second->getPays() . '<br>';
echo 'Ville : ' . $second->getVille() . '<br>';
echo 'Code Postal : ' . $second->getPostal() . '<br>';
echo 'Nombre de chambres : ' . $second->getChambres() . '<br>';
echo 'Nombre de pièces : ' . $second->getPiece() . '<br>';
echo 'Jardin : ' . ($second->isJardin() ? 'Oui' : 'Non') . '<br>';
echo 'Nombre d\'étages : ' . $second->getEtages() . '<br>';
echo 'Garage : ' . ($second->isGarage() ? 'Oui' : 'Non') . '<br>';

echo 'Pays : ' . $Third->getPays() . '<br>';
echo 'Ville : ' . $Third->getVille() . '<br>';
echo 'Code Postal : ' . $Third->getPostal() . '<br>';
echo 'Nombre de chambres : ' . $Third->getChambres() . '<br>';
echo 'Nombre de pièces : ' . $Third->getPiece() . '<br>';
echo 'Garage : ' . ($Third->getGarage() ? 'Oui' : 'Non') . '<br>';


