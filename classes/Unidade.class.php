<?php
class Unidade extends Numeros
{
  public function setNumero($num)
  {
    $this->numero = $num;
  }
  
  protected function toString($num)
  {
    if ($num < 10 & $num >= 0) {
      $numero = array('zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');
    
      $this->string = $numero[(int) $num];
    }
  }
  
  public function getString()
  {
    $this->toString($this->numero);
    return $this->string;
  }
  
  public function show()
  {
    $this->toString($this->numero);
    echo $this->string;
  }
}
