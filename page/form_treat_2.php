<!-- page/form_treat_2.php -->





<pre>
<?php var_dump($_POST); ?>
</pre>




<?php
$nom = $_POST["nom"];
if($nom === "Bonjour!"){ 
  header('Location: /page/form_2.php?success=true');
  exit();
}else{
  header('Location: /page/form_2.php?success=false');
} ?>