<!-- page/exo/exo_1.php -->

<!-- Créer une fonction qui à partir d'un tableau de chiffre nous donne une moyenne. Si aucune note n'est présente 
dans le tableau, la fonction va nous rendre 0.
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- En dessous grace à l'appel de votre fonction, afficher le résultat sous cette forme = résulat : X -->
<?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 1</h1>
<p> Créer une fonction qui à partir d'un tableau de chiffre nous donne une moyenne. Si aucune note n'est présente 
dans le tableau, la fonction va nous rendre 0.
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- En dessous grace à l'appel de votre fonction, afficher le résultat sous cette forme = résulat : X</p>
<?php
$noteArray = [10, 15, 16, 2, 4, 20, 13];
function getAverageFrom(array $array): int|float
{
  if (empty($array)){
    return 0;
  }
  $total = 0;
  foreach($array as $item){
    $total += $item;
    echo $item . ', ';
  }
  return round($total / count($array),2);
}
echo getAverageFrom($noteArray);

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>