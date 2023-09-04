<!-- page/function.php -->
<?php include_once __DIR__ . '/../component/header.php'?>

<h1>Les fonctions en PHP</h1>

<?php

//penser à typer le retour de votre fonction
function test(): void
{
  echo "bonjour  ";
}

test();

// function avec arguments
function getCompiledInfos(string $firstName, string $lastName, int $age): string{
  return $firstName . ' ' . $lastName . ' ' . $age . ' ';
}

echo getCompiledInfos('Ilyes', 'ATTIA', 33);

?>

<?php include_once __DIR__ . '/../component/footer.php'?>