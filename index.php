<?php

require __DIR__."/vendor/autoload.php";

use src\dao\ContratoModel;
use src\dao\LeadModel;
use src\dao\UsuarioModel;

$contrato = new ContratoModel();
print_r($contrato);
echo "<br/>";

$lead = new LeadModel();
print_r($lead);
echo "<br/>";

$usuario = new UsuarioModel();
print_r($usuario);
echo "<br/>";
