<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

    $dono = new Dono();
    $registro = $dono->buscarPorId($_GET['cod']);

?>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <hr />
      <center><h1>Alteracao de Donos - Pet-Shop Versao 1.0</h1></center>
    <hr />
  </head>
  <body>
     <form id="formulario" name="formulario" action = "atualizardono.php" method="post">
     <fieldset>
        <legend>Dados do Dono</legend>
		<input type = "hidden" value = "<?= $registro->id_dono; ?>" name = 'codigo' id="codigo">
        <label>Nome:</label>
            <input type="text" name="nome" id="nome" maxlength= "50" size = "55" value="<?= $registro->nm_dono;?>"/><br />
        <label>E-mail:</label>
            <input type="text" name="email" id="email" maxlength= "50" size="40" value = "<?= $registro->tx_email;?>"/><br />
        <label>Sexo:</label>
         <?php
         if($registro->cs_sexo == 'f'){
             ?>
             <input type="radio" name="sexo" id="masc" value="m" /><label>Masculino</label><input type="radio" name="sexo" id="fem" value="f" checked/><label>Feminino</label><br />
             <?php
         } else {
         ?>
             <input type="radio" name="sexo" id="masc" value="m" checked/><label>Masculino</label><input type="radio" name="sexo" id="fem" value="f" /><label>Feminino</label><br />
         <?php
         }
         ?>
         <label>Cidade:</label>
            <input type="text" name="cidade" id="cidade" maxlength= "40" size="35" value = "<?= $registro->nm_cidade?>"/><br />
        <label>Estado:</label>
            <select name="estado" id="estado" >
                <option value="">Selecione um Estado</option>
                <option value="AC" <?= $registro->sg_estado == 'AC' ? 'selected': ''?>>AC</option>
                <option value="MT" <?= $registro->sg_estado == 'MT' ? 'selected': ''?>>MT</option>
                <option value="DF" <?= $registro->sg_estado == 'DF' ? 'selected': ''?>>DF</option>
            </select><br />
        <label>Observacoes:</label><textarea cols="40" rows="5" name="observacoes" id="observacoes"><?= $registro->tx_observacao; ?></textarea><br />
     </fieldset>
         <br />
         <br />
	 <input type="submit" value="Modificar" /> <input type="reset" value="Apagar Tudo" />
     <br />
     <hr>
     <a href = "listardonosatualizar.php">Voltar</a>
	 </form>
  </body>
</html>
