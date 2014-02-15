<?php
class Numeros
{
  protected $numero;
  protected $string;


  public function __construct($numero = NULL)
  {
    $this->numero = $numero;
  }
  
  private function mil($numero)
  {
    $mil = new Centena((int) $numero / 1000);
    $string = $mil->getString();
    
    if ($numero % 1000) {
      $cem = new Centena($numero % 1000);
      $string .= ' mil, ' . $cem->getString();
    }
    else {
      $string .= ' mil';
    }
    
    return $string;
  }
  
  private function milhao($numero)
  {
    $milhao = new Centena((int) $numero / 1000000);
    $string = $milhao->getString();
    
    if ($numero % 1000000) {
      $string .= ((int) $numero / 1000000 > 1.9)? ' milhões, ': ' milhão, ';
      $string .= $this->mil($numero %  1000000);
    }
    else {
      $string .= ((int) $numero / 1000000 > 1)? ' milhões': ' milhão';
    }
    
    return $string;
  }
  
  private function bilhao($numero)
  {
    $milhao = new Centena((int) $numero / 1000000000);
    $string = $milhao->getString();
    
    if ($numero % 1000000000) {
      $string .= (intval($numero / 1000000000) > 1)? ' bilhões, ': ' bilhão, ';
      $string .= $this->milhao($numero %  1000000000);
    }
    else {
      $string .= ((int) $numero / 1000000000 > 1)? ' bilhões': ' bilhão';
    }
    
    return $string;
  }
  
  public function getString()
  {
    $this->toString($this->numero);
    return $this->string;
  }
  
  protected function toString($num)
  {
    if ($num > 999 && $num < 1000000) {
      $this->string = $this->mil($num);
    }
    elseif ($num > 999999 && $num < 1000000000) {
      $this->string = $this->milhao($num);
    }
    elseif ($num > 999999999) {
      $this->string = $this->bilhao($num);
    }
    else {
      $numero = new Centena($num);
      $this->string = $numero->getString();
    }
  }

  public function getNumero()
  {
    return $this->numero;
  }
  
  public function show()
  {
    echo $this->string;
  }
}