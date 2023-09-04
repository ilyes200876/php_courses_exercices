<?php include_once __DIR__ . '/../../component/header.php'?>
<?php include_once __DIR__ . '/../../ressources/userData.php'?>


<a href="/page/exoGET/exo_3.php">Retourner sur la liste des utilisateurs</a>

<?php

$currentUser = [];
$id = '';

if(isset($_GET['id'])){
  $id = $_GET['id'];
} else {
  header('Location: /');
  exit();
}


foreach($users as $user){
  if($user['id'] === $id){
    $currentUser = $user;
  }
}

if(empty($currentUser)){
  header('Location: /page/exoGET/exo_3.php?error=true');
  exit();
}

?>

<ul>
    <p>email = <?= $currentUser['email'] ?></p>
  
</ul>







<?php include_once __DIR__ . '/../../component/footer.php'?>

