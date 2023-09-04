<!-- /page/intro_poo.php -->
<?php
  include_once __DIR__ . '/../component/header.php';
  include_once __DIR__ . '/../model/Vehicule.php'; 
  include_once __DIR__ . '/../model/Personnage.php'; 
?>

<h1>Programmation orienté objet - Introduction</h1>

<?php

$vehicule1 = new Vehicule('brown', 10);
// echo $vehicule1->color;
// echo $vehicule1->getColor();

// $vehicule1->setColor('red');
// echo $vehicule1->getColor();

// $vehicule1->setColor('yellow');
// echo $vehicule1->getColor();
// echo nl2br("\n mon véhicule a " . $vehicule1->getwheelNb() . " roues.\n")

$personnage1 = new Personnage('toto', 19);
$personnage2 = new Personnage('tata', 20);
echo nl2br($personnage1->getName() . "\n");
echo nl2br($personnage2->getName() . "\n");
echo nl2br($personnage1->getAge() . "\n");
echo nl2br($personnage2->getAge() . "\n");
echo nl2br($personnage1->getStrength() . "\n");
echo nl2br($personnage2->getStrength() . "\n");
echo nl2br($personnage1->getInfo() . "\n");
echo nl2br($personnage2->getInfo() . "\n");
?>

<?php include_once __DIR__ . '/../component/footer.php' ?>