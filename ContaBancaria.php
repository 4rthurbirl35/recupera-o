<?php

class contabancaria
{
    private $titular;
    private $saldo = 0;

    public function
 settitular($nome)
 {
    $this -> Titular = 
    $nome;
 }

 public function
 gettitular()
    {
        return $this ->titular;
    }
  
    public function
    depositar($valor)
    {
        $this ->saldo +=
        $valor;
    }

    public function
    consultarsaldo()
    {
        return $this->saldo;
    }

    public function 
    sacar($valor)
    {
        if ($this->saldo >=
        $valor) {
            $this->saldo -= $valor;
        }

        echo "saque de R$" .number_format($valor, 2, ',', '.') ."
        realizado.<br>";
                }
         
       }

?>       
