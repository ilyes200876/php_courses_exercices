<!-- /page/eso/exo_file/exo.php -->

<?php include_once __DIR__ . "/../../../component/header.php" ?>
<pre>
<?php
var_dump($_POST);
var_dump($_FILES);
?>
</pre>

<?php

if(isset($_FILES['my_super_file'])){

  $fileType = pathinfo($_FILES['my_super_file']['name'], PATHINFO_EXTENSION);
  $fileSize = $_FILES['my_super_file']['size'];
  $fileName = pathinfo($_FILES['my_super_file']['name'], PATHINFO_FILENAME);
  if($fileType !== "pdf"){
    echo "Vous devez télécharcher un fichier pdf";
  
  }elseif($fileSize > 2000000){
    echo "Votre fichier ne doit pas dépasser les 2Mo";
  }else{$safeFileName = $fileName . '-' . uniqid() . '.' . $fileType;
    // var_dump($fileType);
    // var_dump($fileName);
    // var_dump($safeFileName);
    // var_dump($fileSize);
    // die();
  
    move_uploaded_file($_FILES['my_super_file']['tmp_name'],
    __DIR__ . "/../../../upload/" . $safeFileName);}
    
}


?>

<h2>Uploader un fichier PDF</h2>

<form action="" method="POST" enctype="multipart/form-data">
  <label for="my_file">Ajouter un fichier PDF</label>
  <input type="file" name="my_super_file" id="my_fy_file">
  <button type="submit">Valider</button>
</form>


<?php include_once __DIR__ . "/../../../component/footer.php" ?>