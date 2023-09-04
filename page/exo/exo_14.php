<!-- page/exo/exo_14.php -->

<!-- Le jeu du petit cochon! Attention plûtot difficile dans l'algo!
  - Un cochon peut avoir : 4 pattes, 2 yeux, 1 queue, 2 oreilles
  - Une fois le cochon assemblé, vous avez gagné !
  - Pour se faire il faut lancer un dé spécial :
      - Ce dé est composé de 6 faces :
      * 3 avec des pattes
      * 1 avec un oeil
      * 1 avec une queue
      * 1 avec une oreille
        (Les faces avec les pattes, se sont pas toutes collées)
        
  Objectif (fonction à faire) :
  - Vous devez compter en combien de lancé de dé vous avez réussi à assembler votre cochon ! 
  - Affichez pour chaque lancé de dés, quelle face avez vous eu : ex en premier : pattes, ensuite : oeil etc etc
  - Affichez à la toute fin, combien de lancé vous avez du faire, exemple : j'ai du faire X lancés ! -->
  <?php include_once __DIR__ . '/../../component/header.php'?>
<h1>Exercice 14</h1>
<p>Le jeu du petit cochon! Attention plûtot difficile dans l'algo!
  - Un cochon peut avoir : 4 pattes, 2 yeux, 1 queue, 2 oreilles
  - Une fois le cochon assemblé, vous avez gagné !
  - Pour se faire il faut lancer un dé spécial :
      - Ce dé est composé de 6 faces :
      * 3 avec des pattes
      * 1 avec un oeil
      * 1 avec une queue
      * 1 avec une oreille
        (Les faces avec les pattes, se sont pas toutes collées)
        
  Objectif (fonction à faire) :
  - Vous devez compter en combien de lancé de dé vous avez réussi à assembler votre cochon ! 
  - Affichez pour chaque lancé de dés, quelle face avez vous eu : ex en premier : pattes, ensuite : oeil etc etc
  - Affichez à la toute fin, combien de lancé vous avez du faire, exemple : j'ai du faire X lancés !</p>

<?php




function playDe(){

  $arrayDe = ['pattes', 'oeuils', 'pattes','pattes', 'queue', 'oreilles'];

  $array =[
    'pattes' => 0,
    'oeuils' => 0,
    'queue' => 0,
    'oreilles' => 0
  ];

  $ch = '';
  $i = 0;
  $j = 0;
    while (!isPigComplete($array)){
      if($arrayDe[rand(0, 5)] === 'pattes'){
        $array['pattes'] += 1;
        $i++;
        $ch = $ch . 'pattes, ';
      }
      if($arrayDe[rand(0, 5)] == 'oeuils'){
        $array['oeuils'] += 1;
        $i++;
        $ch = $ch . 'oeuils, ';
      }
      if($arrayDe[rand(0, 5)] == 'queue'){
        $array['queue'] += 1;
        $i++;
        $ch = $ch . 'queue, ';
      }
      if($arrayDe[rand(0, 5)] == 'oreilles'){
        $array['oreilles'] += 1;
        $i++;
        $ch = $ch . 'oreilles, ';
      }
      // Equivaut à 
      // $pig[$dice] += 1;
    }
    if (isPigComplete($array)){
      echo nl2br($ch . "\n" . $i . "\n" . "j'ai du faire " . $i . " lancés !");
      }
    
}

function isPigComplete(array $pig): bool{
  if(($pig['pattes'] >= 4) && ($pig['oeuils'] >= 2) && ($pig['queue'] >= 1) && ($pig['oreilles'] >= 2)){
    return true;
  }
  return false;
}

// while (!isPigComplete($pig)) {
//   $bodyPart = $dice[array_rand($dice)];
//   $pig[$bodyPart] = $pig[$bodyPart] + 1;
//   $counter++;
// }

playDe();


?>

<?php include_once __DIR__ . '/../../component/footer.php'?>