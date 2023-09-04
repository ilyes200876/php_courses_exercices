<!-- page/exo/exo_3.php -->

<!-- Faire une fonction qui prend en paramètre une température d’un volume d’eau, on veut savoir dans quel état est l’eau (solide, liquide ou gaz) (positif : liquide, négatif : solide, au dela de 100°: gaz)
	- Afficher la température sur votre page sous cette forme = X degré
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : "l'eau est dans un état solide/liquide/gaz" -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 3</h1>
<p> Faire une fonction qui prend en paramètre une température d'un volume d'eau, on veut savoir dans quel état est 
  l'eau (solide, liquide ou gaz) (positif : liquide, négatif : solide, au dela de 100°: gaz)
	- Afficher la température sur votre page sous cette forme = X degré
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : "l'eau est dans un état 
  solide/liquide/gaz"</p>

<?php
$temperature1 = -10;
$temperature2 = 20;
$temperature3 = 150;

function waterState(float $temp): string{
  echo $temp . ' degré   ';
  if ($temp <= 0){
    return 'solide  ';
  } 
  if ($temp > 100){
    return 'gaz  ';
  } 
  return 'liquide  ';
}

echo 'l\'eau est dans un état ' . waterState($temperature1);
echo 'l\'eau est dans un état ' . waterState($temperature2);
echo 'l\'eau est dans un état ' . waterState($temperature3);
?>

<?php include_once __DIR__ . '/../../component/footer.php'?>