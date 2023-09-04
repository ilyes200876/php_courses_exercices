<!-- page/exo/exo_9.php -->

<!-- Faire une fonction qui ajoute derrière chaque voyelle d'une chaine de caractères 'fe' et répète ensuite la voyelle
Par exemple :
Chat donne : chafeat
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 9</h1>
<p>Faire une fonction qui ajoute derrière chaque voyelle d'une chaine de caractères 'fe' et répète ensuite la voyelle
Par exemple :
Chat donne : chafeat
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue</p>

<?php
$string1 = "coucou";
$string2 = "ppssss";
$string3 = "les débiles pendent que la terre est ronde";
$string4 = "les débiles@pendent que la terre est ronde";



function addCharacters(string $string){
  $stringChanged = '';
  echo nl2br(($string . " \n "));
  $array = str_split($string);
  foreach ($array as $item){
    if(($item == 'e') || ($item == 'a') || ($item == 'i') || ($item == 'o') || ($item == 'u')){
      $stringChanged = $stringChanged . $item . 'fe' . $item;  
    }else{
      $stringChanged  = $stringChanged . $item;
    }
  }
  echo $stringChanged;
}

addCharacters($string1);
echo nl2br("\n");
addCharacters($string2);
echo nl2br("\n");
addCharacters($string3);
echo nl2br("\n");
addCharacters($string4);

// V2

// $word = 'chat';
// $voyelle = ['a', 'e', 'i', 'o', 'u', 'y'];

// echo '<br>';
// function returnCompiledWord(string $myWord, array $voyelle): string
// {
//   $strTab = str_split($myWord);

//   $newString = '';

//   foreach ($strTab as $value) {
//     if (in_array($value, $voyelle)) {
//       $newString .= $value . "fe";
//     }
//     $newString.= $value;
//   }

//   return $newString;
// }

// echo returnCompiledWord($word, $voyelle);


?>

<?php include_once __DIR__ . '/../../component/footer.php'?>