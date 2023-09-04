<!-- /page/exoGET/api_commune_list.php -->
<?php include_once __DIR__ . '/../../component/header.php'?>

<?php
$codedepartement = $_GET['code'];

$url = "https://geo.api.gouv.fr/departements/" . $codedepartement . "/communes";
$json = file_get_contents($url);

$data =json_decode($json, true);

?>

<h1>Les communes de <?= $_GET['nom'] ?></h1>
<p><strong>Le nombre total des communes est </strong><?= count($data) ?>.</p>

<ul>
  <?php foreach($data as $commune) : ?>
    <li><?= $commune['nom'] ?></li>
    <!-- <li><a href="/page/exoGET/api_departement_list.php?code=<?= $commune['code'] ?>">Cliquer ici</a></li> -->
  <?php endforeach; ?>
</ul>

<?php include_once __DIR__ . '/../../component/footer.php'?>