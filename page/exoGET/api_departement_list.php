<!-- /page/exoGET/api_departement_list.php -->
<?php include_once __DIR__ . '/../../component/header.php'?>

<?php
$codeRegion = $_GET['code'];

$url = "https://geo.api.gouv.fr/regions/" . $codeRegion . "/departements";
$json = file_get_contents($url);

$data =json_decode($json, true);
// var_dump($data);
// echo '</pre>';
?>

<h1>Les départements du <?= $_GET['nom'] ?></h1>
<p><strong>Le nombre total des départements est </strong><?= count($data) ?>.</p>

<ul>
  <?php foreach($data as $departement) : ?>
    <li><?= $departement['nom'] ?></li>
    <li><a href="/page/exoGET/api_commune_list.php?code=<?= $departement['code'] ?>&nom=<?= $departement['nom'] ?>">Cliquer ici</a></li>
  <?php endforeach; ?>
</ul>

<?php include_once __DIR__ . '/../../component/footer.php'?>