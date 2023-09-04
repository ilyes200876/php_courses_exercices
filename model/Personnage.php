<!-- model/Personnage.php -->


<?php

class Personnage
{
  private string $name;
  private int $hpMax = 300;
  private int $hp;
  private int $age;
  private int $strength = 25;

  public function __construct(string $newName, int $newAge){
    $this->name = $newName;
    $this->hp = $this->hpMax;
    $this->age = $newAge;
  }

  public function getName(): string{
    return $this->name;
  }
  public function setName(string $name): void{
    $this->name = $name; 
  }
  
  public function getHpMax(): int{
    return $this->hpMax;
  }
  public function setHpMax(string $hpMax): void{
    $this->hpMax = $hpMax; 
  }

  public function getHp(): int{
    return $this->hp;
  }
  public function setHp(int $hp): void{
    $this->hp = $hp;
  }

  public function getAge(): int{
    return $this->age;
  }
  public function setAge(int $age): void{
    $this->age = $Age;
  }

  public function getStrength(): int{
    return $this->strength;
  }
  public function setStrength(int $strength): void{
    $this->strength = $strength;
  }
  
  public function getInfo(): string{
    return $this->name . " : " . $this->hp . "/" . $this->hpMax;
  }


}


