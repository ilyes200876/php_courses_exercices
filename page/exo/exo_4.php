<!-- page/exo/exo_4.php -->

<!-- Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.
La fonction doit renvoyer le prix augmenté avec le pourcentage.
	- Afficher les deux paramètres dans votre page sous cette forme = X euros, X pourcentage
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : X euros -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 4</h1>
<p>Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.
La fonction doit renvoyer le prix augmenté avec le pourcentage.
	- Afficher les deux paramètres dans votre page sous cette forme = X euros, X pourcentage
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : X euros</p>

<?php
$price1 = 10.95;
$percentage1 = 25.85;


function waterState(float $price, float $percentage): string{
  echo $price . ' euros   ';
  echo $percentage . ' pourcentage   ';
  return round($price + $price* 100 / $percentage, 2);
}

echo waterState($price1, $percentage1) . ' euros';
?>

<?php include_once __DIR__ . '/../../component/footer.php'?>