<!-- page/exo/exo_12.php -->

<!-- Faire une fonction qui permet de calculer la valeur d'un mot au Scrabble.

Elle prendra en paramètre une chaîne de caractère et la valeur en point du mot sera retournée.

Valeurs des lettres :

- 1 point: "A", "E", "I", "O", "U", "L", "N", "R", "S", "T",
- 2 points: "D", "G",
- 3 points: "B", "C", "M", "P",
- 4 points: "F", "H", "V", "W", "Y",
- 5 points: "K",
- 8 points: "J", "X",
- 10 points: "Q", "Z",

	- Afficher le mot donnée, exemple : CHAT
	- Afficher en dessous le nombre de point obtenu grace à votre fonction, ex : 10 pts -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 12</h1>
<p>Faire une fonction qui permet de calculer la valeur d'un mot au Scrabble.

Elle prendra en paramètre une chaîne de caractère et la valeur en point du mot sera retournée.

Valeurs des lettres :

- 1 point: "A", "E", "I", "O", "U", "L", "N", "R", "S", "T",
- 2 points: "D", "G",
- 3 points: "B", "C", "M", "P",
- 4 points: "F", "H", "V", "W", "Y",
- 5 points: "K",
- 8 points: "J", "X",
- 10 points: "Q", "Z",

	- Afficher le mot donnée, exemple : CHAT
	- Afficher en dessous le nombre de point obtenu grace à votre fonction, ex : 10 pts</p>

<?php
$string1 = "CHAT";
$string2 = "DOg";
$string3 = "PQZXAR";



function countPoints(string $string):int{
  $result = 0;
  echo nl2br(($string . " \n "));
  $finalArray = [];
  $array = str_split(strtolower($string));
  foreach($array as $item){
    if (($item == "a") || ($item == "e") || ($item == "i") || ($item == "o") || ($item == "u") ||
      ($item == "l") || ($item == "n") || ($item == "r") || ($item == "s") || ($item == "t")){
      $result += 1;   
    }
    if (($item == "d") || ($item == "g")){
      $result += 2;
    }
    if (($item == "b") || ($item == "c") || ($item == "m") || ($item == "p")){
      $result += 3;
    }
    if (($item == "f") || ($item == "h") || ($item == "v") || ($item == "w") || ($item == "y")){
      $result += 4;
    }
    if ($item == "k"){
      $result += 5;
    }
    if (($item == "j") || ($item == "x") ){
      $result += 8;
    }
    if (($item == "q") || ($item == "z") ){
      $result += 10;
    }
  }

  echo $result . " pts";
  return $result;
}

countPoints($string1);
echo nl2br("\n");
countPoints($string2);
echo nl2br("\n");
countPoints($string3);

// v2
// function calculerPointsScrabble($mot) {
//   $valeursLettres = [
//       "A" => 1, "E" => 1, "I" => 1, "O" => 1, "U" => 1, "L" => 1, "N" => 1, "R" => 1, "S" => 1, "T" => 1,
//       "D" => 2, "Gs" => 2,
//       "B" => 3, "C" => 3, "M" => 3, "P" => 3,
//       "F" => 4, "H" => 4, "V" => 4, "W" => 4, "Y" => 4,
//       "K" => 5,
//       "J" => 8, "X" => 8,
//       "Q" => 10, "Z" => 10
//   ];

//   $mot = strtoupper($mot);

//   $totalPoints = 0;


//   for ($i = 0; $i < strlen($mot); $i++) {
//     $lettre = $mot[$i];

//     if (array_key_exists($lettre, $valeursLettres)) {
//       $totalPoints += $valeursLettres[$lettre];
//     }
//   }

//   return $totalPoints;
// }

// $motDonne = "CHAT";
// echo "Mot donné : " . $motDonne . "<br>";

// $points = calculerPointsScrabble($motDonne);
// echo "Nombre de points : " . $points . " pts";


// V2 BIS
// $motScrabble = "Chat";

// echo nl2br("Mot Scrabble : " . $motScrabble . "\n");

// function valeurScrabble(string $str): int {
//   $strMini = strtolower($str);
//   $points = [10 => 'qz', 8 => 'jx', 5 => 'k', 4 => 'fhvwy', 3 => 'bcmp', 2 => 'dg', 1 => 'aeioulnrst'];
//   $total = 0;
//   foreach ($points as $key => $lettres) {
//     $lettres = str_split($lettres);
//     foreach ($lettres as $lettre) {
//       if (strpos($strMini, $lettre)) {
//         $total += $key;
//       }
//     }
//   }
//   return $total;
// }


// $truc = valeurScrabble($motScrabble);
// echo $truc . " pts";

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>