<!-- page/array.php -->
<?php include_once __DIR__ . '/../component/header.php'?>

<!-- Les tableaux en PHP -->

<?php
// tableau simple
$myFirstArray = [0, 65, 33, 72];

$myFirstArray[2];

//tableau associatif
$mySecondArray = [
  "firstName" => 'Ilyes',
  "lastName" => 'ATTIA',
  "age" => 33
];
$mySecondArray["age"];

$myThirdArray = [
  'user' => [
    [
      'name' => 'Ilyes'
    ]
  ]
    ];


$myThirdArray["user"][0]["name"];

// Parcourir des tableaux
// en JS mySecondArray.forEach((item) => {});
foreach ($mySecondArray as $item){
  echo $item . " ";
}

// ou
foreach ($mySecondArray as $key => $value) {
  echo $key . ' : ' . $value . '  ';
}
//while
$nbTour = 1;
while ($nbTour < 10) {
    echo 'ici -- ';
    $nbTour++;
}
echo "<br>";
//do while
$nbTour = 1;
do {
    echo 'la --' . $nbTour . '    ';
    $nbTour++;
} while ($nbTour < 10);





?>

<?php include_once __DIR__ . '/../component/footer.php'?>