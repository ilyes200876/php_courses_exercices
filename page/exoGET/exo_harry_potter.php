<!-- /page/exoGET/exo_harry_potter.php -->
<?php include_once __DIR__ . '/../../component/header.php'?>



<h1>Les personnages de Harry Potter</h1>
<?php
$url = "https://hp-api.onrender.com/api/characters";
$json = file_get_contents($url);
$tab =json_decode($json, true);
// echo '<pre>';
// var_dump($tab);
// echo '</pre>';
?>
<div class="row g-4">
  
  <?php foreach($tab as $item) : ?>
    <?php 
    $string = '';
    $i = 1;
    foreach($item['alternate_names'] as $nameBis){
        $string .= $nameBis;
        if($i !== count($item['alternate_names'])){
          $string .= ' / ';
        }
      $i++;
    }
    ?>
  
    <div class="col-md-3">
      <div class="card cardHarryPotter">
      <div class="imgDeath">
        <?php if($item['alive']) :?>
          <img class="aliveImg" src="../../asset/images/alive.png" alt="logo en vie">
          <?php else : ?>
          <img class="aliveImg" src="../../asset/images/dead.png" alt="logo mort">
        <?php endif; ?>
      </div>
        <?php if($item['image'] != '') :?>
          <img src="<?php echo $item['image'] ?>" class="card-img-top imgHarryPotter" alt="...">
          <?php else : ?>
          <img src="../../asset/images/hogwart.jpg" alt="">
        
        <?php endif; ?>
        <div class="card-body cardDetails">
          <h3><?= $item['name'] ?></h3>
          <i><?= $string ?></i>
          <div class="w-100 d-flex justify-content-center">
            <?php if($item['house'] == 'Gryffindor' ) :?>
              <img class="imgHarryPotterHouse" src="../../asset/images/gryffondor.png" alt="logo du griffindor">
              <?php elseif($item['house'] == 'Slytherin') : ?>
                <img class="imgHarryPotterSlythrin" src="../../asset/images/serpentard.png" alt="logo du serpentard">
                <?php elseif($item['house'] == 'Ravenclaw') : ?>
                  <img class="imgHarryPotterRavenclaw" src="../../asset/images/serdaigle.png" alt="logo du serdaigle">
                  <?php elseif($item['house'] == 'Hufflepuff') : ?>
                    <img class="imgHarryPotterHufflepuff" src="../../asset/images/poufsouffle.webp" alt="logo du poufsouffle">
                    <?php endif; ?>

          </div>
          
          <?php if($item['dateOfBirth'] !='') : ?>
            <p class="dateOfBirth"><?= $item['dateOfBirth'] ?></p>
            <?php else :?>
              <p class="dateOfBirth">Date of birth is unknown</p>
          <?php endif; ?>
          <p>Genre : <?= $item['gender'] ?></p>
          <p>Espèce : <?= $item['species'] ?></p>
          <p>Acteur : <?= $item['actor'] ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>



<?php include_once __DIR__ . '/../../component/footer.php'?>