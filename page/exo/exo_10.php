<!-- page/exo/exo_10.php -->

<!-- Faire une fonction qui permet d'inverser une chaîne de caractères.
Elle prendra en paramètre une chaîne de caractère et la chaîne de caractères inversées sera retournée par la fonction.
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 10</h1>
<p>Faire une fonction qui permet d'inverser une chaîne de caractères.
Elle prendra en paramètre une chaîne de caractère et la chaîne de caractères inversées sera retournée par la fonction.
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue</p>

<?php
$string1 = "coucou";
$string2 = "ppssss";
$string3 = "les debiles pensent que la terre est ronde";
$string4 = "les debiles@pensent que la terre est ronde";



function addCharacters(string $string):string{
  // $i;
  $stringChanged = '';
  echo nl2br(($string . " \n "));
  $array = str_split($string);
  for ($i = count($array) - 1; $i >= 0; $i--){
    $stringChanged = $stringChanged . $array[$i];  
  }
  echo $stringChanged;
  return $stringChanged;
}

addCharacters($string1);
echo nl2br("\n");
addCharacters($string2);
echo nl2br("\n");
addCharacters($string3);
echo nl2br("\n");
addCharacters($string4);

// v2

// $test = 'allo';

// function reverseString($str): string
// {
//   return strrev($str);
// }

// echo reverseString($test);

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>