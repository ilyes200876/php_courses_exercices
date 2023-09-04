<!-- page/exo/exo_post:exercice2/form_treat.php -->
<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateOfBirth = $_POST['dateOfBirth'];
$country = $_POST['country'];
$langue = $_POST['langue'];
$password = $_POST['password'];
$passwordVerify = $_POST['passwordVerify'];

if(($nom === "") || ($prenom === "") || ($dateOfBirth === "")){
  echo "Il faut que vous remplissiez votre nom, prénom et date de naissance !!!";
}else{
  echo nl2br("Nom : " . $nom . "\n Prénom : " . $prenom . "\n Date de naissance : " . $dateOfBirth . "\n Pays de résidence : " . $country . "\n");
  ?>
  <ul>
    <h3>Vos langues préférée sont:</h3>
    <?php foreach($langue as $item) : ?>
      <li><?= $item ?></li>
    <?php endforeach; ?>
  </ul><br>
<?php
}
if(($password === "") || ($passwordVerify === "")){
  echo "Il faut remplir le mot de passe et le mot de passe de vérificaation";
  }elseif($password !== $passwordVerify){
    echo "le mot de passe et le mot de passe de vérification sont différents";
}


?>

<pre>
<?php var_dump($langue); ?>
</pre>