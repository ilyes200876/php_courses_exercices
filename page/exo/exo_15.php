<!-- page/exo/exo_15.php -->

<!-- Un jeu de Yahtzee ! Attention plûtot difficile dans l'algo (même très difficile, attention aux noeuds au cerveau) !
Faire une fonction qui simule un jeu de yatzee (https://fr.wikipedia.org/wiki/Yahtzee)
  Le Yatzee est un jeu de lancer de dé (au nombre de 5)
  Vous devrez afficher chaque lancé de dé random, on va rester simple et afficher quelque chose de ce style :
  (1) (4) (6) (2) (4)

  Une fois le lancé affiché, la fonction doit informer l'utilisateur de ce qu'il a fait :
  - Brelan (3 dés du même résultat)
  - Carré (4 dés du même résultat)
  - Full (3 dés du même résultat et 2 dés du même résultat)
  - Yams (5 dés du même résultat)
  - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
  - Grande suite : les 5 dés se suivent

	Exemple à afficher à l'utilisateur une fois les calculs terminés : 
	(2) (2) (4) (4) (4)
	Est ce une grande suite : Non
	Est ce une petite suite : Non
	Est ce que c'est un Yatzhee : Non
	Est ce que c'est un Square : Non
	Est ce que c'est un Full : Oui
	Est ce que c'est un Brelan : Oui -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 15</h1>
<p>Un jeu de Yahtzee ! Attention plûtot difficile dans l'algo (même très difficile, attention aux noeuds au cerveau) !
Faire une fonction qui simule un jeu de yatzee (https://fr.wikipedia.org/wiki/Yahtzee)
  Le Yatzee est un jeu de lancer de dé (au nombre de 5)
  Vous devrez afficher chaque lancé de dé random, on va rester simple et afficher quelque chose de ce style :
  (1) (4) (6) (2) (4) 

  Une fois le lancé affiché, la fonction doit informer l'utilisateur de ce qu'il a fait :
  - Brelan (3 dés du même résultat)
  - Carré (4 dés du même résultat)
  - Full (3 dés du même résultat et 2 dés du même résultat)
  - Yams (5 dés du même résultat)
  - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
  - Grande suite : les 5 dés se suivent

	Exemple à afficher à l'utilisateur une fois les calculs terminés : 
	(2) (2) (4) (4) (4)
	Est ce une grande suite : Non
	Est ce une petite suite : Non
	Est ce que c'est un Yatzhee : Non
	Est ce que c'est un Square : Non
	Est ce que c'est un Full : Oui
	Est ce que c'est un Brelan : Oui</p>

<?php




function playDeYatzhee(){
  $array = [];
  $array1 = [];
  $grandeSuite = '';
  $petiteSuite = '';
  $yatzhee = '';
  $square = '';
  $full = '';
  $brelan = '';
  $i = 0;
  $k = 1;
  $j = 0;
  

  while ($i < 5){
    $array [] = rand(1,6);
    $i++;
  }
  foreach ($array as $item){
    echo nl2br(" (" . $item . ") ");
  }


  if (isGrandeSuite($array)){
    $grandeSuite = 'oui';
  }else{
    $grandeSuite = 'non';
  }

  if (isPetiteSuite($array)){
    $petiteSuite = 'oui';
  }else{
    $petiteSuite = 'non';
  }

  if (isYatzhee($array)){
    $yatzhee = 'oui';
  }else{
    $yatzhee = 'non';
  }

  if (isSquare($array)){
    $square = 'oui';
  }else{
    $square = 'non';
  }

  if (isFull($array)){
    $full = 'oui';
  }else{
    $full = 'non';
  }

  if (isBrelon($array)){
    $brelan = 'oui';
  }else{
    $brelan = 'non';
  }
  echo nl2br("\n Est ce une grande suite : " . $grandeSuite . "\n" .
	"Est ce une petite suite : " . $petiteSuite . "\n" .
	"Est ce que c'est un Yatzhee : " . $yatzhee . "\n" .
	"Est ce que c'est un Square : " . $square . "\n" .
	"Est ce que c'est un Full : " . $full . "\n" .
	"Est ce que c'est un Brelan : " . $brelan . "\n");
}

function createTableWithoutRepetion($array): array{
  $j = 0;
  $array1 = [];
  foreach ($array as $item){
    if(!in_array($item, $array1)){
      $array1[] = $item;
    }else{
      $j++;
    }
  }
  return $array1;
}

function getNumberNonRepetition($array): int{
  $j = 0;
  $array1 = [];
  foreach ($array as $item){
    if(!in_array($item, $array1)){
      $array1[] = $item;
    }else{
      $j++;
    }
  }
  return $j;
}

function getNumberRepetition($array){
  $array1 = createTableWithoutRepetion($array);
  $compteur1 = 0;
  $compteur2 = 0;
  $compteur3 = 0;
  $compteur = 0;
  if(count($array1) == 3){
    for($i = 0; $i < 5; $i++){
      if ($array1[0] == $array[$i]){
      $compteur = $compteur1++;
      }
      if ($array1[1] == $array[$i]){
      $compteur = $compteur2++;
      }
      if ($array1[2] == $array[$i]){
      $compteur = $compteur3++;
      }
    }
  }
  if(count($array1) == 2){
    for($i = 0; $i < 5; $i++){
      if ($array1[0] == $array[$i]){
      $compteur = $compteur1++;
      }
      if ($array1[1] == $array[$i]){
      $compteur = $compteur2++;
      }
    }
  }
  return $compteur;
}


function isGrandeSuite($array): bool
{
  $k = 1;
  for($i = 0; $i < 4; $i++){
    if($array[$i] == $array[$i + 1] - 1){
      $k++;
    }
  }
  if($k == 5){
    return true;
  }
  return false;
}

function isPetiteSuite($array): bool
{ 
  $k = 1;
  for($i = 0; $i < 4; $i++){
    if($array[$i] == $array[$i + 1] - 1){
      $k++;
    }
  }
  if($k == 4){
    return true;
  }else{
    return false;
  }
}

function isSquare($array): bool{
  $number = getNumberRepetition($array);
  $array1 = createTableWithoutRepetion($array);
  $j = getNumberNonRepetition($array);
  
  if (((count($array1) == 2) && ($j == 3)) && ($number == 4)){
    return true;
  }else{
    return false;
  }
}

function isFull($array): bool{
  $number = getNumberRepetition($array);
  $array1 = createTableWithoutRepetion($array);
  $j = getNumberNonRepetition($array);
  if (((count($array1) == 2) && ($j == 3)) && ($number == 3)){
    return true;
  }else{
    return false;
  }
}

function isBrelon($array): bool{
  $number = getNumberRepetition($array);
  var_dump($number);
  $array1 = createTableWithoutRepetion($array);
  var_dump($array1);
  $j = getNumberNonRepetition($array);

  if (((count($array1) == 3) && ($j == 2)) && ($number == 3)){
    return true;
  }else{
    return false;
  }
  if ((count($array1) == 2) && ($j == 3) && ($number == 3)){
    return true;
  }
}

function isYatzhee($array): bool{
  $array1 = createTableWithoutRepetion($array);
  if(count($array1) == 1){
    return true;
  }else{
    return false;
  }
}

playDeYatzhee();


?>

<?php include_once __DIR__ . '/../../component/footer.php'?>