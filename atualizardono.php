<?php

function __autoload($class_name) {
	require_once 'classes/' . $class_name . '.php';
}

	$dono = new Dono();

	$dono->setDono($_POST['nome']);
	$dono->setEmail($_POST['email']);
	$dono->setSexo($_POST['sexo']);
	$dono->setCidade($_POST['cidade']);
	$dono->setEstado($_POST['estado']);
	$dono->setObservacao($_POST['observacoes']);

	$dono->update($_POST['codigo'], $_POST);

	echo "\n";
	echo "<hr>";
	echo "<b>Pronto !!! A ALTERACAO foi efetuada com sucesso !!!</b>";
	echo "<hr>";
	include_once("index.php");
?>
