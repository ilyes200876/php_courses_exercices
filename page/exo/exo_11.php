<!-- page/exo/exo_11.php -->

<!-- Faire une fonction qui permet de déterminer si une chaîne de caractères est un "Pangram".
Elle prendra en paramètre une chaîne de caractère, et elle retournera un booléen : true si la chaine est un pangram, 
false sinon.
Qu'est-ce qu'un pangram ?
Un pangram est une phrase qui utilise **toutes** les lettres de l'alphabet au moins une fois.
Vous allez avoir besoin de ça : ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", 
"r", "s", "t", "u", "v", "w", "x", "y", "z"]
Vous pouvez tester un résultat "true" avec cette phrase : "The quick brown fox jumps over the lazy dog."

	- Afficher la string X donnée
	- Afficher le résultat true ou false en dessous grace à votre fonction -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 11</h1>
<p>Faire une fonction qui permet de déterminer si une chaîne de caractères est un "Pangram".
Elle prendra en paramètre une chaîne de caractère, et elle retournera un booléen : true si la chaine est un pangram, 
false sinon.
Qu'est-ce qu'un pangram ?
Un pangram est une phrase qui utilise **toutes** les lettres de l'alphabet au moins une fois.
Vous allez avoir besoin de ça : ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", 
"r", "s", "t", "u", "v", "w", "x", "y", "z"]
Vous pouvez tester un résultat "true" avec cette phrase : "The quick brown fox jumps over the lazy dog."

	- Afficher la string X donnée
	- Afficher le résultat true ou false en dessous grace à votre fonction</p>

<?php
$string1 = "coucou";
$string2 = "The quick brown fox jumps over the lazy dog.";
$string3 = "abcdefghijklmnoabvcpedfqrstuvwxyz";



function checkPangram(string $string):bool{
  echo nl2br(($string . " \n "));
  $finalArray = [];
  $array = str_split($string);
  foreach($array as $item){
    if (!in_array($item, $finalArray)){
      $finalArray[] = $item;   
    }
  }
  if(count($finalArray) >= 26){
    echo "est un panagrame.";
    return true;
  }

  echo "n'est pas un panagrame.";
  return false;
}

checkPangram($string1);
echo nl2br("\n");
checkPangram($string2);
echo nl2br("\n");
checkPangram($string3);


// v2
// $alphabetArray = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
// function isPangram(string $word, array $alphabet): bool
// {
//   foreach ($alphabet as $value) {
//     if (stripos($word, $value) === false) {
//       return false;
//     }
//   }

//   return true;
// }

// isPangram('The quick brown fox jumps over the lazy dog.', $alphabetArray);



?>

<?php include_once __DIR__ . '/../../component/footer.php'?>