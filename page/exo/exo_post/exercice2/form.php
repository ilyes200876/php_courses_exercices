<?php include_once __DIR__ . '/../../../../component/header.php'?>

<p>Formulaire exercice 2</p>

<p>Créez un formulaire HTML contenant les champs suivants :

Prénom (input text)
Nom (input text)
Date de naissance (input date)
Sexe (radio buttons avec les options "Homme" et "Femme")
Password (input password)
PasswordVerify(input password)
Langues préférées (checkboxes avec les options "Anglais", "Français", "Espagnol")
Pays de résidence (select box avec les options "France", "États-Unis", "Espagne", "Royaume-Uni")
Dans votre script PHP de traitement, réalisez les tâches suivantes :

Vérifiez si tous les champs obligatoires sont remplis (prénom, nom, date de naissance). Si l'un de ces champs est vide, 
affichez un message d'erreur approprié.

Vérifiez si le formulaire a été soumis correctement. Si oui, affichez les informations saisies par l'utilisateur, 
y compris les langues préférées et le pays de résidence.

Si les langues préférées sont sélectionnées, affichez-les sous forme de liste à puces.

Utilisez la date de naissance pour calculer l'âge de l'utilisateur et affichez-le.

Vérifié que le password et le passwordVerify sont bien la même string sinon rediriger l'utilisateur avec un message 
d'erreur.

faire l'affichage SUR LA PAGE DE TRAITEMENT</p>

<form action="/page/exo/exo_post/exercice2/form_treat.php" method="POST">
  <div>
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" required>
  </div>
  <div>
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" required>
  </div>
  <div>
    <label for="dateOfBirth">Date de naissance</label>
    <input type="date" id="dateOfBirth" name="dateOfBirth" required>
  </div>
  <h3>Sexe</h3>
  <div>
    <label for="man">Homme</label>
    <input type="radio" id="man" name="sex" value="homme">
  </div>
  <div>
    <label for="woman">Femme</label>
    <input type="radio" id="woman" name="sex" value="femme">
  </div>
  <div>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password">
  </div>
  <div>
    <label for="passwordVerify">Mot de passe de vérification</label>
    <input type="password" id="passwordVerify" name="passwordVerify">
  </div>
  <div>
    <h3>Langues préférées</h3>
    <div>
      <label for="english">Anglais</label>
      <input type="checkbox" value="english" name="langue[]">
    </div>
    <div>
      <label for="french">Français</label>
      <input type="checkbox" value="french" name="langue[]">
    </div>
    <div>
      <label for="spanish">Espagnol</label>
      <input type="checkbox" value="spanish" name="langue[]">
    </div>
  </div>
  <div>
    <label for="accessory">Pays de résidence</label>
    <select name="country" id="country">
      <option value="france">France</option>
      <option value="usa">Etats-Unis</option>
      <option value="spain">Espagne</option>
      <option value="uk">Royaume-Uni</option>
    </select>
  </div>
  <button type="submit">Envoyer</button>
</form>


<?php include_once __DIR__ . '/../../../../component/footer.php' ?>