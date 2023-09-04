<?php include_once __DIR__ . '/../../../../component/header.php' ?>

<p>Formulaire exercice 3</p>

<p>Créez un formulaire HTML contenant les champs suivants :

Nombre 1 (input number)
Nombre 2 (input number)
Opération (select box avec les options "Addition", "Soustraction", "Multiplication", "Division")
Bouton de soumission (input submit)
Dans votre script PHP de traitement, réalisez les tâches suivantes :

Vérifiez si les deux champs de nombres sont remplis. Si l'un ou les deux champs sont vides, affichez un message d'erreur 
approprié.

Vérifiez l'opération sélectionnée. En fonction de l'opération choisie, effectuez le calcul approprié sur les deux 
nombres.

Affichez le résultat du calcul.

Par exemple, si l'utilisateur sélectionne "Addition" et saisit les nombres 5 et 3, le script PHP devrait afficher le 
résultat "8".


FAIRE L'AFFICHAGE SUR LA PAGE DE TRAITEMENT</p>

<form action="/page/exo/exo_post/exercice3/form_treat.php" method="POST">
  <div>
    <label for="numberOne">Number 1</label>
    <input type="number" id="numberOne" name="numberOne" >
  </div>
  <div>
    <label for="numberTwo">Number 2</label>
    <input type="number" id="numberTwo" name="numberTwo" >
  </div>
  <div>
    <label for="operation">Opération</label>
    <select name="operation" id="operation">
      <option value="addition">Addition</option>
      <option value="soustraction">Soustraction</option>
      <option value="multiplication">Multiplication</option>
      <option value="division">Division</option>
    </select>
  </div>
  <button type="submit">Envoyer</button>
</form>


<?php include_once __DIR__ . '/../../../../component/footer.php' ?>