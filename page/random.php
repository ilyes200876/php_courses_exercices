<?php include_once __DIR__ . '/../component/header.php'?>

<?php
if((isset($_GET['toto'])) && (isset($_GET['tata']))){
  $toto = $_GET['toto'];
  echo nl2br("toto : " . $toto . "\n");
  $tata = $_GET['tata'];
  echo "tata : " . $tata;
}else{
  header("Location: get.php");
exit();
}


?>


<?php include_once __DIR__ . '/../component/footer.php'?>