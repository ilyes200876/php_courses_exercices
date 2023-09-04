<!-- page/exo/exo_post:exercice4/form_treat.php -->

<pre>
  <?php var_dump($_POST)   ?>
</pre>

<?php

$plate = $_POST['plate'];
$extras = [];
if(isset($_POST['extras'])){
  $extras = $_POST['extras'];
}

$string = "";

if($plate === ""){
  echo nl2br("Vous devriez choisir votre plat préféré !!! \n");
}elseif(count($extras) === 0){
  echo "Vous n'avez pas choisi des extras !!!";
  }else{
?>
<h3>Vos extras</h3>
<ul>
  <?php foreach($extras as $item) : ?>
    <li><?= $item ?></li>
  <?php endforeach; ?>
</ul><br>

<?php

}

if(($plate !== "") && (count($extras) > 0)){
  $string = "Votre plat préféré est : " . $plate . " avec les les extras suivants : ";
  foreach($extras as $item){
    $string .= $item . ", ";
  }
  echo rtrim($string, ", ") . ".";
}



?>