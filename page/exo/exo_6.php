<!-- page/exo/exo_6.php -->

<!-- Avec le moins de lignes de code possible, proposez moi un algorithme qui, pour un nombre donné, affiche la table 
de multiplication liée. Par exemple : Si je demande 1, je veux voir :
1x1 = 1
1x2 = 2
etc Et ce jusqu'à 12
- Afficher le nombre donné sur votre page : Nombre donné : 3
- Puis affiché le résultat comme au dessus -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 6</h1>
<p>Avec le moins de lignes de code possible, proposez moi un algorithme qui, pour un nombre donné, affiche la table 
  de multiplication liée. Par exemple : Si je demande 1, je veux voir :
1x1 = 1
1x2 = 2
etc Et ce jusqu'à 12
- Afficher le nombre donné sur votre page : Nombre donné : 3
- Puis affiché le résultat comme au dessus</p>

<?php
$number1 = 6;
$number2 = 5;
$number3 = 11;
$number4 = 9;
$number5 = -5;


function multiplicationTable(int $nbr){
  echo nl2br($nbr . " : \n");
  $i = 1;
  while ($i < 13){
    echo  nl2br($nbr . ' * ' . $i . ' = ' . $nbr * $i . "\n");
    $i++;
  }
}

multiplicationTable($number1);
echo nl2br("\n");
multiplicationTable($number2);
echo nl2br("\n");
multiplicationTable($number3);
echo nl2br("\n");
multiplicationTable($number4);
echo nl2br("\n");
multiplicationTable($number5);
?>

<?php include_once __DIR__ . '/../../component/footer.php'?>