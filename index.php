<?php
require_once 'classes/cliente.php';

$dados = array(
    0=>"Tallyson",
    1=>"111.824.656-09",
    2=>"Teste",
    3=>"Teste"
);

$cliente1 = new Cliente();

echo $cliente1->dados($dados);