<!-- page/variable.php -->
<?php include_once __DIR__ . '/../component/header.php'?>

<h1>Les variables</h1>

<?php
$name = "Ilyes"; //String
$age = 33; //int
$height = 179.8; // float
$isMasculine = true; //bool
$nullVar = null; //nullable variable

// Ajouter + 1 au nombre
$myNumber = 1;

//equivalent pour les 3 du dessous
$myNumber++;
$myNumber = $myNumber + 1;
$myNumber += 1;


// Les concatenations
// ATTENTION en JS c'est + mais en PHP c'est .
$concatenationOne = 'Ilyes' . ' ' . 'ATTIA';
$newAge = 33;
$firstName = "Ilyes";
$lastName = "ATTIA";
$sentence = "Je m'appelle " . $firstName . " " . $lastName . " et j'ai " . $newAge . " ans.";
?>
<!-- Je créé un p et j'écho ma phrase -->
<p><?= $sentence ?></p>



<?php include_once __DIR__ . '/../component/footer.php'?>