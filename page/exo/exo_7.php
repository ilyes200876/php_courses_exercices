<!-- page/exo/exo_7.php -->

<!-- Faites une fonction qui prend en argument une chaîne de caractères (LONGUE) Cette fonction doit afficher les 15 
premiers caractères puis '...' Par exemple :
Je passe la chaîne : 'Lorem quisque class vestibulum'
La fonction doit afficher 'Lorem quisque c...'
	- Afficher la chaine de charactere longue sur votre page : 'Lorem quisque class vestibulum'
	- En dessous grace à l'appel de votre fonction, affiché le résultat voulu -->
<?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 7</h1>
<p>Faites une fonction qui prend en argument une chaîne de caractères (LONGUE) Cette fonction doit afficher les 15 
  premiers caractères puis '...' Par exemple :
Je passe la chaîne : 'Lorem quisque class vestibulum'
La fonction doit afficher 'Lorem quisque c...'
	- Afficher la chaine de charactere longue sur votre page : 'Lorem quisque class vestibulum'
	- En dessous grace à l'appel de votre fonction, affiché le résultat voulu</p>

<?php
$ch1 = "cou cou";
$ch2 = "ppsssstt hahaha";
$ch3 = "les débiles pendent que la terre est ronde";



function cutString(string $string){
  $i;
  $stringShort = '';
  echo nl2br($string . "\n");
  if (strlen($string) <= 15){
    echo $string;
  }else{
    $array = str_split($string);
  for ($i = 0; $i <= 15; $i++){
    $stringShort = $stringShort .  $array[$i];
  }
  echo ($stringShort . "...");
  }

  
}

cutString($ch1);
echo nl2br("\n");
cutString($ch2);
echo nl2br("\n");
cutString($ch3);

?>

<?php include_once __DIR__ . '/../../component/footer.php'?>