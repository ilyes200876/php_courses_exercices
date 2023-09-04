<!-- page/exo/exo_post:exercice3/form_treat.php -->

<?php

$numberOne = $_POST['numberOne'];
$numberTwo = $_POST['numberTwo'];
$operation = $_POST['operation'];
if(($numberOne === "") || ($numberTwo === "")){
  echo nl2br("il faut remplir les deux nombres \n");
  }elseif($operation === "addition"){
    echo intval($numberOne) + intval($numberTwo);
  }elseif($operation === "soustraction"){
    echo intval($numberOne) - intval($numberTwo);
  }elseif($operation === "multiplication"){
    echo intval($numberOne) * intval($numberTwo);
  }elseif($operation === "division"){
    echo intval($numberOne) / intval($numberTwo);
  }


?>