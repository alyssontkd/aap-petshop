<?php
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$dono = new Dono();
$dono->truncate();

#conectar a base de Dados e Deletar todos os Registros
echo "<h3> A Base de Dados foi reinicializada com Sucesso! </h3>";

include("index.php");

