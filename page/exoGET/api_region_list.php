<!-- /page/exoGET/api_region_list.php -->
<?php include_once __DIR__ . '/../../component/header.php'?>


<?php
$url = "https://geo.api.gouv.fr/regions";
$json = file_get_contents($url);
// var_dump($json);
$data =json_decode($json, true);
echo '<pre>';
// var_dump($data);
// echo '</pre>';
?>
<h1>Les régions de france</h1>
<p><strong>Le nombre total des régions est </strong><?= count($data) ?>.</p>

<ul>
  <?php foreach($data as $region) : ?>
    <li><?= $region['nom'] ?></li>
    <li><a href="/page/exoGET/api_departement_list.php?code=<?= $region['code'] ?>&nom=<?= $region['nom'] ?>">Cliquer ici</a></li>
  <?php endforeach; ?>
</ul>

<?php include_once __DIR__ . '/../../component/footer.php'?>

