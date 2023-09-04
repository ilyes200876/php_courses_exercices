<!-- /page/exoCOOCKIE/exo_1.php !-->
<?php 

if(isset($_POST['color'])){
  $color = $_POST['color'];
  setcookie('color', '');
  $_COOKIE['color'] = $color;
  
}


?>
<?php include_once __DIR__ . "/../../component/header.php" ?>
<p>faire un form avec un select avec 4 couleurs minimum et un bouton, au click cela sauvegarde la couleur sélectionné 
en cookie (favoriteColor) Si couleur sélectionnée affiche un message votre couleur préférée est
à chaques click sur le bouton remplace la couleur avec celle actuellement sélectionné</p>


<?php
echo nl2br("J'utilise la méthode " . $_SERVER['REQUEST_METHOD'] . "\n");

if(isset($_COOKIE['color'])){
  echo 'votre couleur préferée est : ' . $_COOKIE['color'];
}


?>



<form action="./exo_1.php" method="POST">
  <div>
  <label for="color">choisissez une couleur</label>
    <select name="color" id="color">
      <option value="blue">Bleu</option>
      <option value="red">Rouge</option>
      <option value="green">Vert</option>
      <option value="yellow">Jaune</option>
    </select>
  </div>
<button type="submit">Enregistrer</button>
</form>

<?php

echo nl2br("Je suis sur " .$_SERVER['PHP_SELF'] . "\n");
echo nl2br("L'URI est : " . $_SERVER['REQUEST_URI'] . "\n");
echo nl2br("Ladresse IP est : " . $_SERVER['REMOTE_ADDR']  . "\n");


?>


<?php include_once __DIR__ . "/../../component/footer.php" ?>