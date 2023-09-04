<!-- page/exo/exo_3.php -->

<!-- Cet exercice va utiliser 3 fichier PHP différents.
(2 pages et un fichier de donnée).

Récupérer le fichier userData.php sur discord.
Mettez le dans un dossier "resources" dans votre projet (resources/userData.php);

	- Dans la première page 
		- importer votre userData, grace à un include.
		- Afficher tout vos utilisateur dans une liste.
			- dans la liste afficher l'email, qui est en réalité un lien vers notre seconde page
	- Dans la seconde page 
		- Débrouillez vous pour savoir que quel utilisateur on a cliqué grace à son ID (indice ca va se passer dans 
    la première page)
		- Afficher toutes les infos de l'utilisateur
		- rajouter un lien au début de la page qui permet d'aller vers la premiere page
		
		- Chose à faire en plus, si dans la seconde page l'id de l'utilisateur n'existe pas :
			- Rediriger l'utilisateur vers la premiere page et affichez un message d'erreur (appelez moi si vous ne voyez 
      pas du tout comment faire) -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
  <?php include_once __DIR__ . '/../../ressources/userData.php'?>

  <h1>Exercice3</h1>
  <p>Cet exercice va utiliser 3 fichier PHP différents.
(2 pages et un fichier de donnée).

Récupérer le fichier userData.php sur discord.
Mettez le dans un dossier "resources" dans votre projet (resources/userData.php);

	- Dans la première page 
		- importer votre userData, grace à un include.
		- Afficher tout vos utilisateur dans une liste.
			- dans la liste afficher l'email, qui est en réalité un lien vers notre seconde page
	- Dans la seconde page 
		- Débrouillez vous pour savoir que quel utilisateur on a cliqué grace à son ID (indice ca va se passer dans 
    la première page)
		- Afficher toutes les infos de l'utilisateur
		- rajouter un lien au début de la page qui permet d'aller vers la premiere page
		
		- Chose à faire en plus, si dans la seconde page l'id de l'utilisateur n'existe pas :
			- Rediriger l'utilisateur vers la premiere page et affichez un message d'erreur (appelez moi si vous ne voyez 
      pas du tout comment faire)</p>


			<?php
if(isset($_GET['error'])){
	echo "Utyilisateur invalide";
}
			?>

<ul>

<?php foreach($users as $user) : ?>
	
	<li><a href="/page/exoGET/exo_3_biz.php?id=<?= $user['id'] ?>"><?= $user['email'] ?></a></li>
	
		<?php endforeach; ?> 

</ul>
<?php include_once __DIR__ . '/../../component/footer.php'?>