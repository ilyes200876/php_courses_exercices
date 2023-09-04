<!-- page/exo/exo_post:exercice1/form_treat.php -->

<?php 
$tab = ["pute", "petasse","bitch" ,"niquer" ,"motherfucker" ,"trouducul" ,"asshole" ,"pipe" ,"encule" ,"fuck" ];
$mail = $_POST["mail"];
$regexMail = '/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/';
$message = $_POST["message"];
// $tabEmail = str_split($mail);


if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
  header('Location: /page/exo/exo_post/exercice1/form.php?statusMail=failure');
  exit();
}



  foreach($tab as $item){
    if((strpos($message, $item) !== false) || ($message =="")){
      header('Location: /page/exo/exo_post/exercice1/form.php?statusMessage=failure');
      exit();
    }
  }

  header('Location: /page/exo/exo_post/exercice1/form.php?statusGlobal=ok');
  exit();


?>





