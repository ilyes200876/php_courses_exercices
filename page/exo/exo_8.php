<!-- page/exo/exo_8.php -->

<!-- Faites une fonction checkPassword, dont le but est de vérifier la validité d'un mot de passe, qui sera pris en argument Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères, et qu'il contient au moins le caratère '@' La fonction renverra un booléen pour indiquer la validité du mot de passe.
	- Afficher sur votre page la string X que vous aller checker
	- Afficher grace au retour de votre fonction : valide OU invalide -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 8</h1>
<p>Faites une fonction checkPassword, dont le but est de vérifier la validité d'un mot de passe, qui sera pris en 
  argument Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères, et qu'il contient au moins le 
  caratère '@' La fonction renverra un booléen pour indiquer la validité du mot de passe.
	- Afficher sur votre page la string X que vous aller checker
	- Afficher grace au retour de votre fonction : valide OU invalide</p>

<?php
$password1 = "cou@cou";
$password2 = "ppssss";
$password3 = "les débiles pendent que la terre est ronde";
$password4 = "les débiles@pendent que la terre est ronde";



function checkPassword(string $string):bool{
  $j = 0;
  echo ($string . " : ");
  $array = str_split($string);
  foreach ($array as $item){
    if($item == '@'){
      $j++;  
    }
  }
  if(($j > 0) && (strlen($string) > 9)){
  echo 'valide';
  return true;
  }
  
  echo 'invalide';
  return false;
}

checkPassword($password1);
echo nl2br("\n");
checkPassword($password2);
echo nl2br("\n");
checkPassword($password3);
echo nl2br("\n");
checkPassword($password4);


// V2 :
// $password = 'bonjour@bonjour';

// function checkPassword($pass): bool
// {
//   if (strlen($pass) > 9 && str_contains($pass, '@')) {
//     return true;
//   }

//   return false;
// }

// if (checkPassword($password)) {
//   echo 'Valide';
// } else {
//   echo 'Invalide';
// }

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>