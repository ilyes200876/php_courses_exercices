<?php include_once __DIR__ . '/../../../../component/header.php' ?>

<p>Formulaire exercice 1</p>

<p>Créer un formulaire de contact, qui va avoir un champ Nom/Prénom, date de naissance, email et un dernier champ pour 
  le contenu du message.
Sur la page de traitement de votre formulaire : 
	- vérifier que l'adresse email est bien une adresse email
	- faites vous une liste de mot bannis (exemple des insultes), une dizaine de mots, vérifié que dans le contenu 
  du message aucun de ces mots bannis n'apparaît.
		- Si un mot banni apparait, rediriger l'utilisateur sur le formulaire en lui affichant une erreur.
		- Si tout le reste est bon, rediriger l'utilisateur sur le formulaire en lui affichant un message de succès.
		

Faire l'affichage SUR LA PAGE DU FORMULAIRE</p>

<form action="/page/exo/exo_post/exercice1/form_treat.php" method="post">
  <div>
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">
  </div>
  <div>
    <label for="dateOfBirth">Date de naissance</label>
    <input type="date" id="dateOfBirth" name="dateOfBirth">
  </div>
  <div>
    <?php
    if(isset($_GET['statusMail'])){
      if($_GET['statusMail'] !== 'success'){
        echo nl2br("Le format de l'adresse mail n'est pas bon \n");
      }
    }
      
    ?>
    <label for="mail">Adresse mail</label>
    <input type="email" id="mail" name="mail">
  </div>
  <div>
    <?php
      if(isset($_GET['statusMessage'])){
        if($_GET['statusMessage'] === 'failure'){
          echo nl2br("Votre message n'est pas bon \n");
        }
      }
    ?>
    <label for="message">Votre message</label>
    <input type="textarea" id="message" name="message">
  </div>
  <button type="submit">Envoyer</button>
  <?php
    if(isset($_GET['statusGlobal'])){
      if($_GET['statusGlobal'] === 'ok'){
        echo nl2br("Votre avez bien rempli le formulaire \n");
      }
    }
  ?>

</form>


<?php include_once __DIR__ . '/../../../../component/footer.php' ?>