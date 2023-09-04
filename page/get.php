<?php include_once __DIR__ . '/../component/header.php'?>
<h1>Le paramètre GET</h1>
<p>Le paramètre GET est ou sont passés dans l'url et commence par un ?</p>

<h2>Exemple simple :</h2>
<p>https://www.youtube.com/results?search_query=toto</p>
<i>Le paramètre search_query est passwé dans l'url et il vaut toto.</i>

<p>On peut envoyé plusieurs paramètres, ils sont séparés pas &</p>
<i>Exemple : ?my_var=123&m_second_var=456&my_third_var=789</i>

<h2>Comment le récupérer ?</h2>
<p>voir code ligne 15</p>

<?php
// toutes les variables GET
var_dump($_GET);
// var_dump($_GET['toto']);

// vérifier si le paramètre toto a bien été envoyé
if(isset($_GET['toto'])){

  // du coup je peux récupérer
  $toto = $_GET['toto'];
}

    

// ici je veux un lien vers une page random.php
// en passant les paramètres toto et tata 
// les afficher dans random.php
// SINON rediriger l'utilisateur vers notre page get.php


?>

<a href="/page/random.php?toto=gnhgtj&tata=ghngh,n">nana</a>
<?php

?>

<?php include_once __DIR__ . '/../component/footer.php'?>