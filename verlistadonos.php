<?php
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$dono = new Dono();
$resultadoQuery = $dono->buscarTodos();
  echo "<form action = 'removerdonos.php'> <table width='50%'>";
  echo "<tr bgcolor = 'silver'>
             <td>Selecionar?</td>
	     <td>Nome</td>
	     <td>Email</td>
	  </tr>";
  $i = 0;
  foreach ($resultadoQuery as $registro) {

     echo "<tr bgcolor = 'lightsteelblue'>
             <td><input type = 'checkbox' name = 'v[$i]' value = '$registro->id_dono'></td>
	     <td>$registro->nm_dono</td>
	     <td>$registro->tx_email</td>
	  </tr>";
     $i++;
   }
  echo "</table>";

  echo "<input type = 'submit' value = 'Deletar Registro'> </form>";
?>
<a href = "index.php">Voltar</a>