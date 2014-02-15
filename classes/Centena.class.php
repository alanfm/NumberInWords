<?php
class Centena extends Numeros
{  
  public function setNumero($num)
  {
    $this->numero = $num;
  }
  
  private function getDezena($num)
  {
    $und = new Dezena($num % 100);
    return $und->getString();
  }
  
  private function getStrNumero($num)
  {
    $numero = array('', 'cento', 'duzento', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecentos', 'oitocentos', 'novecentos');
    $tmp = '';
    
    if ($num % 100 > 0) {
      $tmp = ' e ' . $this->getDezena($num);
    }

    return $numero[(int) $num / 100] . $tmp;
  }
  
  protected function toString($num)
  {
    if ($num > 100 && $num < 1000) {
      $this->string = $this->getStrNumero($num);
    }
    elseif ($num >= 0 && $num < 100) {
      $this->string = $this->getDezena($num);
    }
    else {
      $this->string = 'cem';
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
