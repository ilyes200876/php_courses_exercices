<!-- page/form_2.php -->
<?php include_once __DIR__ . '/../component/header.php'?>

<h2>Formulaire</h2>
<form action="/page/form_treat_2.php" method="post">
<?php if(isset($_GET['success'])) : ?>
  <?php if($_GET['success'] == "true") : ?>
    <p>Ceci est le bon message</p>
  <?php elseif($_GET['success']  == "false") : ?>
    <p>ceci n'est pas le bon message</p>
  <?php endif; ?>
<?php endif; ?>

  <div>
    <label for="nom">Nom(doit être egal à : Bonjour!)</label>
    <input type="text" id="nom" name="nom" required>
  </div>
  <button type="submit">Envoyer</button>
</form>

<?php include_once __DIR__ . '/../component/footer.php'?>