<!-- page/form.php -->
<?php include_once __DIR__ . '/../component/header.php'?>

<h1>Formulaire</h1>

<form method="post" action="/page/form_treat.php">
  <div>
    <label for="animalName">Nom de l'animal (type text)</label>
    <input type="text" id="animalName" name="animalName" required minlength=5>
  </div>
  <div>
    <label for="animalAge">Age de l'animal (Type number)</label>
    <input type="number" id="animalAge" name="animalAge">
  </div>
  <div>
    <h2>Radio</h2>
    <div>
      <label for="animalCat">Chat</label>
      <input type="radio" id="animalCat" name="type" value="cat" checked>
    </div>
    <div>
      <label for="animalDog">Dog</label>
      <input type="radio" id="animalDog" name="type" value="dog">
    </div>
    <div>
      <label for="animalFish">Fish</label>
      <input type="radio" id="animalFish" name="type" value="fish">
    </div>
  </div>
  <div>
    <h2>Checkboxes</h2>
    <div>
      <label for="pate">Paté</label>
      <input type="checkbox" value="pate" name="food[]">
    </div>
    <div>
      <label for="croquette">Croquette</label>
      <input type="checkbox" value="croquette" name="food[]">
    </div>
    <div>
      <label for="other">Autre</label>
      <input type="checkbox" value="other" name="food[]">
    </div>
  </div>
  <div>
    <h2>Select simple</h2>
    <label for="accessory">Accessoire</label>
    <select name="accessory" id="accessory">
      <option value="laisse">Laisse</option>
      <option value="collier">Collier</option>
      <option value="jouet">Jouet</option>
    </select>
  </div>
  <div>
    <h2>Select multiple</h2>
    <label for="candy">Candy</label>
    <select name="candy[]" id="candy" multiple>
      <option value="candy1">Candy 1</option>
      <option value="candy2">Candy 2</option>
      <option value="candy3">Candy 3</option>
    </select>
  </div>
  <button type="submit">Envoyer</button>
</form>


<?php include_once __DIR__ . '/../component/footer.php'?>