<?php include_once __DIR__ . '/../../../../component/header.php' ?>

<p>Formulaire exercice 5</p>

<p>onstruire un formulaire à partir de données.
Le but est un formulaire d'achat.

construisez un champ select simple à partir de ce tableau de donnée : 
	$movie = [
		"Interstellar" => 15,
		Donnie Darko" => 16,
		"L'effet papillon" => 5,
		"Pulp Fiction" => 8,
	];
	(chaque champ va être sous cette forme = "Interstellar - 15 euros")

Ajouter un champ de type number (qui va représenter une quantitée)
Ajouter deux checkboxes "Livraison (Oui ou Non)"

Sur la page de traitement de votre formulaire, 
	Faire le calcul du prix du film séléctionné multiplié par la quantité
		Si la livraison est séléctionné -> ajouté 10 euros.
			Affichez dans votre page de traitement le nombre total d'euros à payer.

FAIRE L'AFFICHAGE SUR LA PAGE DE TRAITEMENT</p>

<?php 
$movie=[
	"Interstellar" => 15,
	"Donnie Darko" => 16,
	"L'effet papillon" => 5,
	"Pulp Fiction" => 8,
];

?>
<form action="/page/exo/exo_post/exercice5/form_treat.php" method="post">
	<div>
		<label for="movies">Les Films</label>
		<select name="movies" id="movies">
			<option value="">Choisissez un film</option>
		  <?php foreach($movie as $key => $value) : ?>
			  <option value="<?= $key ?>"><?= $key . ' - ' . $value . ' euros' ?></option>
		  <?php endforeach; ?>
		</select>
	</div>
	<div>
		<label for="quantity"> La quntité</label>
		<input type="number" id="quantity" name="quantity">
	</div>
	<h3>Livraison</h3>
	<div>
		<label for="yes">Oui</label>
		<input type="radio" id="yes" name="delivery" value="oui">
	</div>
	<div>
	<label for="no">Non</label>
		<input type="radio" id="no" name="delivery" value="non">
	</div>
	<button type="submit">Envoyer</button>
</form>



<?php include_once __DIR__ . '/../../../../component/footer.php' ?>