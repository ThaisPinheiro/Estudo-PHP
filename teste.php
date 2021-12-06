<?php

require_once 'src/conta.php';

$conta = criarConta(12345678910, 'Thais', 1000);
var_dump($conta);