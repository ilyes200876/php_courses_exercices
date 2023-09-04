<!--index.php-->
<?php include_once __DIR__ . '/component/header.php'?>

<?php
echo phpinfo();
?>

<p>Bonjour</p>
<button class="btn btn-primary">test</button>

<?php
$array = ['bonjour', 'aurevoir', 'salut', 'sayonara'];
?>

<ul>
  <?php foreach($array as $item) : ?>
    <li><?= $item; ?></li>
    <li><?php echo $item; ?></li>

  <?php endforeach; ?>

</ul>

<?php include_once __DIR__ . '/component/footer.php'?>