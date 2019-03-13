<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}
?>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <hr />
      <center><h1>Cadastro de Donos - Pet-Shop Versao 1.0</h1></center>
    <hr />
  </head>
  <body>
     <form id="formulario" name="formulario" action = "inserirdono.php" method="post">
     <fieldset>
        <legend>Dados do Dono</legend>
        <label>Nome:</label>
            <input type="text" name="nome" id="nome" maxlength= "50" size = "55" /><br />
        <label>E-mail:</label>
            <input type="text" name="email" id="email" maxlength= "50" size="40" /><br />
        <label>Sexo:</label>
            <input type="radio" name="sexo" id="masc" value="m" /><label>Masculino</label><input type="radio" name="sexo" id="fem" value="f" /><label>Feminino</label><br />
        <label>Cidade:</label>
            <input type="text" name="cidade" id="cidade" maxlength= "40" size="35" /><br />
        <label>Estado:</label>
            <select name="estado" id="estado" >
                <option value="">Selecione um Estado</option>
                <option value="AC">AC</option>
                <option value="AM">AM</option>
                <option value="DF">DF</option>
            </select><br />
        <label>Observacoes:</label><textarea cols="40" rows="5" name="observacoes" id="observacoes"></textarea><br />
     </fieldset>
	 <input type="submit" value="Gravar" /> <input type="reset" value="Apagar Tudo" />
     <br />
     <hr>
     <a href = "index.php">Voltar</a>
	 </form>
  </body>
</html>
