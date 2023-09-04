<?php include_once __DIR__ . '/../component/header.php'?>
  
<h1>Cours PHP sur les outputs</h1>

<?php
// echo permet d'afficher le contenu sur notre page
echo "HELLO WORLD from echo function \n";

?>

<p><i>Utiliser le raccourci echo dans le html ~ <?php echo "Ilyes" ?></i></p>
<p>Bonjour <?= 'Ilyes' ?></p>

<!-- pour debogguer en php on utilise var_dump -->
<?php var_dump('Ilyes') ?>

<?php include_once __DIR__ . '/../component/footer.php'?>

