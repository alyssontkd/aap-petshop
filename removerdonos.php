<?php
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$v = $_GET['v'];

$dono = new Dono();
$resultadoQuery = $dono->buscarTodos();
  for($i = 0; $i < count($resultadoQuery); $i++)
   {
    if(isset($v[$i])) {

        $dono->delete($v[$i]);
      }
   }

  echo "<hr>";
	echo "<b>Pronto !!! EXCLUSAO efetuada com sucesso !!!</b>";
	echo "<hr>";
	include_once("index.php");
?>
