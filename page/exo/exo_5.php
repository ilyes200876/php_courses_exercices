<!-- page/exo/exo_5.php -->

<!-- Écrivez une fonction pour supprimer les doublons d’un tableau : Exemple : [1, 2, 3, 3, 3, 4, 5, 5] Résultat 
attendu : [1, 2, 3, 4, 5]
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- Afficher le résultat sur votre page, sous cette forme = X, X, X, X. -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 5</h1>
<p>Écrivez une fonction pour supprimer les doublons d'un tableau : Exemple : [1, 2, 3, 3, 3, 4, 5, 5] Résultat 
  attendu : [1, 2, 3, 4, 5]
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- Afficher le résultat sur votre page, sous cette forme = X, X, X, X.</p>

<?php
$tab = [1, 2, 3, 3, 3, 4, 5, 5];


function deleteDouble(array $array): array{
  $returnArray = [];
  foreach($array as $item){
    echo $item . ', ';
  }
  echo ' ; ';
  foreach($array as $item){
    if (!in_array($item, $returnArray)){
      $returnArray[] = $item;  
      echo $item . ', ';
    }
  }

  return $returnArray;

}

deleteDouble($tab);
?>

<?php include_once __DIR__ . '/../../component/footer.php'?>