<?php
class Dezena extends Numeros
{
  public function setNumero($num)
  {
    $this->numero = $num;
  }
  
  private function getUnidade($num)
  {
    $und = new Unidade($num % 10);
    return $und->getString();
  }

  private function getMenorQueVinte($num)
  {
    $numero = array('', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove');
    return $numero[$num % 10];
  }
  
  private function getMaiorQueVinte($num)
  {
    $numero = array('', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquinta', 'sessenta', 'setenta', 'oitenta', 'noventa');
    $tmp = '';
    
    if ($num > 19) {
      if ($num % 10 > 0)
        $tmp = ' e ' . $this->getUnidade($num);      
    }

    return $numero[(int) $num / 10] . $tmp;
  }
  
  protected function toString($num)
  {
    if ($num > 10 && $num < 20) {
      $this->string = $this->getMenorQueVinte($num);
    }
    elseif ($num >= 0 && $num < 10) {
      $this->string = $this->getUnidade($num);
    }
    else {
      $this->string = $this->getMaiorQueVinte($num);
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
