<!-- page/exo/exo_1.php -->

<!-- En fonction des paramètres GET dans l'url, construire une string et l'affichée.
paramètre GET possible : 
- firstName
- lastName
- job
- age

Si aucun paramètres GET n'est donné, afficher : Aucun paramètres envoyés.
Sinon, imaginons ces paramètres : ?lastName=Pauly&job=Dev
	- résultat : Mon nom de famille est Pauly, mon job est développeur.

Autre exemple possible : ?firstName=Pauly&lastName=Jules
	- résultat : Mon prénom est Jules, mon nom de famille est Pauly.
	
Autre exemple possible : ?firstName=Pauly&lastName=Jules&job=Dev&age=32
	- résultat : Mon prénom est Jules, mon nom de famille est Pauly, mon métier est Dev, mon age est 32.
	
Pensez bien à mettre un "." à la fin de votre phrase et une majuscule au début. 
	- indice, faite le APRES avoir construit votre string. -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
  <h1>Exercice 1</h1>
  <p>En fonction des paramètres GET dans l'url, construire une string et l'affichée.
  paramètre GET possible : 
  - firstName
  - lastName
  - job
  - age
  
  Si aucun paramètres GET n'est donné, afficher : Aucun paramètres envoyés.
  Sinon, imaginons ces paramètres : ?lastName=Pauly&job=Dev
    - résultat : Mon nom de famille est Pauly, mon job est développeur.
  
  Autre exemple possible : ?firstName=Pauly&lastName=Jules
    - résultat : Mon prénom est Jules, mon nom de famille est Pauly.
    
  Autre exemple possible : ?firstName=Pauly&lastName=Jules&job=Dev&age=32
    - résultat : Mon prénom est Jules, mon nom de famille est Pauly, mon métier est Dev, mon age est 32.
    
  Pensez bien à mettre un "." à la fin de votre phrase et une majuscule au début. 
    - indice, faite le APRES avoir construit votre string.</p>

<?php
$stringPrenom ="";
$stringNom ="";
$stringJob ="";
$stringAge ="";
$finalString = "";
if(isset($_GET['firstName'])){
  
  $stringPrenom ="mon prénom est " . $_GET['firstName'] . ", " ;
}
if(isset($_GET['lastName'])){
  
  $stringNom ="mon nom est " . $_GET['lastName'] . ", ";
}
if(isset($_GET['job'])){
  
  $stringJob ="mon métier est " . $_GET['job'] . ", ";
}
if(isset($_GET['age'])){
  
  $stringAge ="mon age est " . $_GET['age'] . ", ";
}
$string = $stringPrenom . $stringNom . $stringJob . $stringAge;
$tab = str_split($string);
var_dump($tab[0]);

for($i = 0; $i < count($tab) - 2; $i++){
  $finalString .= $tab[$i];
}
$finalString .= ".";
if(count($_GET) == 0){
  echo "Aucun paramètres envoyés.";
}else{
  echo ucfirst($finalString);
}


?>
<?php include_once __DIR__ . '/../../component/footer.php'?>
