<!-- model/Vehicule.php -->
<?php


class Vehicule
{
  // private
  // public
  // protected
  private string $color;
  private int $wheelNb;
  
  public function __construct(string $newColor, int $newWheelNb){
    $this->color = $newColor;
    $this->wheelNb = $newWheelNb;
  }  

  public function getColor(): string{
    return $this->color;
  }

  public function setColor(string $newColor): void{
    $this->color = $newColor;
  }
  public function getwheelNb(): int{
    return $this->wheelNb;
  }

  public function setwheelNb(int $wheelNb): void{
    $this->wheelNb = $wheelNb;
  }
}