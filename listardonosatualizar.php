<?php
	echo "<hr>";
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

    $dono = new Dono();
    $resultadoQuery = $dono->buscarTodos();
  ?>
  <center>
  <?php
    echo "<table border = '1' width='50%'>
	         <tr bgcolor = 'silver'> <td>Codigo</td><td>Nome do Dono</td> <td>E-mail</td> <td>Sexo</td> <td>Cidade</td> </tr>";
		 
  foreach($resultadoQuery as $registro) {

	$sexo = $registro->cs_sexo == 'm'? 'Masculino' : 'Feminino';
    //echo "<tr bgcolor = 'lightsteelblue'><td><a href = 'formularioatualizardono.php?cod=$registro[0]'>" .$registro["id_dono"] . "</a></td><td>" . $registro["nm_dono"] . "</td><td>" . $registro["tx_email"] . "</td><td>" . $sexo .  "</td><td>" . $registro["nm_cidade"] . "</td></tr>";
    echo "<tr bgcolor = 'lightsteelblue'><td><a href = 'formularioatualizardono.php?cod=$registro->id_dono'><img src='imagens/logo.jpg' width='15' heigth='30' /></a><a href = 'formularioatualizardono.php?cod=$registro->id_dono'><img src='img/logo.jpg' width='15' heigth='30' /></a></td><td>" . $registro->nm_dono . "</td><td>" . $registro->tx_email . "</td><td>" . $sexo .  "</td><td>" . $registro->nm_cidade . "</td></tr>";
   }
  echo"</table></center>";
	echo "<hr>";
	include_once("index.php");
?>