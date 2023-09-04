<!-- page/exo/exo_13.php -->

<!-- Créer une fonction qui va prendre un (gros) nombre en paramètre (EXEMPLE : 1350)
	- Rentrer dans une boucle qui va décrémenter votre nombre d'un nombre aléatoire compris entre 1 et 50.
	- Compter combien de passages sont nécéssaire dans votre boucle pour que votre nombre de base soit égal ou inférieur 
  à zéro.
	
	- Afficher le nombre donné, ex : 1569
	- Afficher en dessous le nombre de passage dans la boucle : ex : 45 passages. -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 13</h1>
<p>Créer une fonction qui va prendre un (gros) nombre en paramètre (EXEMPLE : 1350)
	- Rentrer dans une boucle qui va décrémenter votre nombre d'un nombre aléatoire compris entre 1 et 50.
	- Compter combien de passages sont nécéssaire dans votre boucle pour que votre nombre de base soit égal ou inférieur 
  à zéro.
	
	- Afficher le nombre donné, ex : 1569
	- Afficher en dessous le nombre de passage dans la boucle : ex : 45 passages.</p>

<?php
$number1 = -1520;
$number2 = 390;
$number3 = 3859;



function substructNumber(int $nbr){
  $result = 0;
  echo nl2br(($nbr . " \n "));
  if ($nbr < 1000){
    echo 'Ce nombre est très petit.';
  }else{
    while ($nbr > 0){
      $nbr -= rand(1, 50);
      $result++;
    }
    echo $result . " passages";
  }
}

substructNumber($number1);
echo nl2br("\n");
substructNumber($number2);
echo nl2br("\n");
substructNumber($number3);

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>