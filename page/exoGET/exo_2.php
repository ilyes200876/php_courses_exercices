<!-- page/exo/exo_2.php -->

<!-- Exemple d'url possible ?number=53841
Le but est : 
	- Créer une fonction qui vous donne un numéro possible entre 1 et 9 inclus.
	- Boucler sur le number récupéré en GET et compter le nombre de fois ou nous devons passer dans la fonction ci dessus 
  pour trouver le bon nombre.
		- exemple j'ai du utiliser 10 fois ma fonction pour trouver le premier numéro (5 dans notre exemple), ensuite 8 fois 
    pour trouver le deuxième numéro etc etc
	- Afficher ensuite le nombre total de fois que la fonction a été utilisé pour trouver tous les chiffres. -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
  <h1>Exercice 2</h1>
  <p>Exemple d'url possible ?number=53841
Le but est : 
	- Créer une fonction qui vous donne un numéro possible entre 1 et 9 inclus.
	- Boucler sur le number récupéré en GET et compter le nombre de fois ou nous devons passer dans la fonction ci dessus 
  pour trouver le bon nombre.
		- exemple j'ai du utiliser 10 fois ma fonction pour trouver le premier numéro (5 dans notre exemple), ensuite 8 fois 
    pour trouver le deuxième numéro etc etc
	- Afficher ensuite le nombre total de fois que la fonction a été utilisé pour trouver tous les chiffres.</p>

<?php
$resultat = 0;
$compteur = 0;
$numberRandom = 0;
if(isset($_GET['number'])){
  $number = $_GET['number'];
  echo nl2br("Pour ce nombre : " . $number . "\n");
}
echo nl2br(gettype($number) . "\n");
$tabNumber = str_split($number);
foreach($tabNumber as $item){

  $compteur = 0;
  while($numberRandom != intval($item)){    
    $numberRandom = rand(1,9);
    $compteur++;  
  }
  echo nl2br("j'ai utilisé " . $compteur . ' fois pour trouver le ' . $item . "\n" );
  $resultat += $compteur;
}
echo "le nombre total pour trouver tous les chiffres est : " . $resultat;

'535698' === 5


?>
<?php include_once __DIR__ . '/../../component/footer.php'?>