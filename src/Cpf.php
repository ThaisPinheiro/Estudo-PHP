<?php 

class Cpf 
{

 private int $cpf;

 public function __construct (int $cpf)
 {
     $this->cpf = $cpf;
 }

 public function recuperarCpf(): int
 {
     return $this->cpf;
 }
 
}

