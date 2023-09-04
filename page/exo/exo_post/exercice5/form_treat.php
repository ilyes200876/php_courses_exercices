<!-- page/exo/exo_post:exercice5/form_treat.php -->
<pre>
  <?php var_dump($_POST)  ?>
</pre>

<?php

$movie=[
	"Interstellar" => 15,
	"Donnie Darko" => 16,
	"L'effet papillon" => 5,
	"Pulp Fiction" => 8,
];
$movies = $_POST['movies'];
$quantity = $_POST['quantity'];
$delivery = "";
if(isset($_POST['delivery'])){
  $delivery = $_POST['delivery'];
}
$price = 0;

if(($movies === "") || ($quantity === "") || ($delivery === "")){
  echo "Remplissez tout le formulaire !!!";
  }else{
    if(array_key_exists($movies, $movie)){
      $price = $movie[$movies];
    } else {
      ?><p style="color: #e30000; font-size: 50px; font-weight: bold; text-align: center;">DANGER !!!!! HACKER !!!!</p>
      <?php
      exit();
    }
  
    $price = intval($quantity) * $price;
    if($delivery === "oui"){
      $price += 10;
    }
    echo "Le prix total à payer est : " . $price . " €";
}

?>