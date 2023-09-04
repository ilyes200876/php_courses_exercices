<?php include_once __DIR__ . '/../../../../component/header.php' ?>

<p>Formulaire exercice 5</p>

<p>Créez un formulaire HTML contenant les champs suivants :

Choisissez votre plat préféré (select box avec les options "Pizza", "Burger", "Pâtes", "Salade")
Choisissez vos extras (checkboxes avec les options "Fromage", "Bacon", "Oignons", "Champignons")
Bouton de soumission (input submit)
Dans votre script PHP de traitement, réalisez les tâches suivantes :

Vérifiez si le plat préféré est sélectionné. Si ce n'est pas le cas, affichez un message d'erreur approprié.

Vérifiez si des extras sont sélectionnés. Si oui, affichez-les sous forme de liste à puces.

Affichez un message indiquant le plat préféré sélectionné par l'utilisateur et les extras choisis le cas échéant.

Par exemple, si l'utilisateur choisit "Pizza" comme plat préféré et sélectionne les extras "Fromage" et "Champignons", 
le script PHP devrait afficher le message suivant : "Vous avez choisi la Pizza avec les extras suivants : Fromage, 
Champignons."

FAIRE L'AFFICHAGE SUR LA PAGE DE TRAITEMENT</p>

<form action="/page/exo/exo_post/exercice4/form_treat.php" method="post">
  <div>
    <label for="plate">Votre plat préféré</label>
    <select name="plate" id="plate">
    <option value="">Selectionner une nourriture</option>
      <option value="pizza">Pizza</option>
      <option value="burger">Burger</option>
      <option value="pasta">Pâtes</option>
      <option value="salade">Salade</option>
    </select>
  </div>
  <div>
    <h3>Vos extras</h3>
    <div>
      <label for="fromage">Fromage</label>
      <input type="checkbox" value="cheese" name="extras[]">
    </div>
    <div>
      <label for="bacon">Bacon</label>
      <input type="checkbox" value="bacon" name="extras[]">
    </div>
    <div>
      <label for="oignons">Oignons</label>
      <input type="checkbox" value="onion" name="extras[]">
    </div>
    <div>
      <label for="champignons">Champignons</label>
      <input type="checkbox" value="mashrooms" name="extras[]">
    </div>
  </div>
  <button type="submit">Envoyer</button>
</form>

<?php include_once __DIR__ . '/../../../../component/footer.php' ?>