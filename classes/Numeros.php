<?php

class Numeros
{
	private $numero;

	public function __construct($numero)
	{
		$this->numero = $this->analisaNumero($numero);
	}

	public function getNumero()
	{
		return $this->numero;
	}

	public function setNumero($numero)
	{
		$this->numero = $this->analisaNumero($numero);

		return $this;
	}

	public function unidade()
	{
		$extenso = ['zero', 'um', 'dois', 'tres', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];

		if ($this->numero > 10) {
			return $extenso[$this->numero % 10];
		}

		return $extenso[$this->numero];
	}

	public function dezena()
	{
		$extenso = ['dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'ointenta', 'noventa'];
		$extenso_10 = ['onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'desessete', 'dessoito', 'desenove'];
	}

	private function analisaNumero($numero)
	{
		if (!is_integer($numero)) {
			$numero = (int) $numero;
		}

		if ($numero < 0) {
			$numero = $numero * (-1);
		}

		return $numero;
	}
}