<!-- page/exo/exo_2.php -->

<!-- Faire une fonction qui prend en paramètre un prix HT unitaire d’un produit, et son nombre de produit.
On veut connaitre le total TTC.
	- Afficher le prix unitaire et le quantitée sur votre page, de cette manière = X HT, X Quantité
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière = XX euros. -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 2</h1>
<p> Faire une fonction qui prend en paramètre un prix HT unitaire d'un produit, et son nombre de produit.
On veut connaitre le total TTC.
	- Afficher le prix unitaire et le quantitée sur votre page, de cette manière = X HT, X Quantité
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière = XX euros.</p>

<?php
$price = 13.99;
$quantity = 10;
$priceTtc;
function priceTtc(float $priceHt, int $productNumber): float{
  $priceTtc = $priceHt * 1.1;
  echo $priceHt . ' HT,  ';
  echo $productNumber . ' Quantité,  ';
  return round($priceTtc,2);
}

echo priceTtc($price, $quantity) . ' euros';
?>

<?php include_once __DIR__ . '/../../component/footer.php'?>