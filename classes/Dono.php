<?php

require_once 'Crud.php';

class Dono extends Crud {

    public $table = 'dono';

    private $id_dono;
    private $nm_dono;
    private $tx_email;
    private $cs_sexo;
    private $nm_cidade;
    private $sg_estado;
    private $tx_observacao;

    public function setIdDono($id_dono) {
        $this->id_dono = $id_dono;
    }

    public function getIdDono() {
        return $this->id_dono;
    }

    public function setDono($nm_dono) {
        $this->nm_dono = $nm_dono;
    }

    public function getDono() {
        return $this->nm_dono;
    }

    public function setEmail($tx_email) {
        $this->tx_email = $tx_email;
    }

    public function getEmail() {
        return $this->tx_email;
    }

    public function setSexo($cs_sexo) {
        $this->cs_sexo = $cs_sexo;
    }

    public function getSexo() {
        return $this->cs_sexo;
    }

    public function setCidade($nm_cidade) {
        $this->nm_cidade = $nm_cidade;
    }

    public function getCidade() {
        return $this->nm_cidade;
    }

    public function setEstado($sg_estado) {
        $this->sg_estado = $sg_estado;
    }

    public function getEstado() {
        return $this->sg_estado;
    }

    public function setObservacao($tx_observacao) {
        $this->tx_observacao = $tx_observacao;
    }

    public function getObservacao() {
        return $this->tx_observacao;
    }


    public function buscarTodos() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function buscarPorId($id_dono) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id_dono = " . $id_dono;
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (nm_dono, tx_email, cs_sexo, nm_cidade, sg_estado, tx_observacao) 
                VALUES (:nm_dono, :tx_email, :cs_sexo, :nm_cidade, :sg_estado, :tx_observacao)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nm_dono', $this->nm_dono);
        $stmt->bindParam(':tx_email', $this->tx_email);
        $stmt->bindParam(':cs_sexo', $this->cs_sexo);
        $stmt->bindParam(':nm_cidade', $this->nm_cidade);
        $stmt->bindParam(':sg_estado', $this->sg_estado);
        $stmt->bindParam(':tx_observacao', $this->tx_observacao);

        return $stmt->execute();
    }

    public function update($id_dono, $dados) {
        $sql = "UPDATE $this->table SET nm_dono = :nm_dono, tx_email = :tx_email, cs_sexo = :cs_sexo, nm_cidade = :nm_cidade, sg_estado = :sg_estado, tx_observacao = :tx_observacao WHERE id_dono = :id_dono";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nm_dono', $dados['nome']);
        $stmt->bindParam(':tx_email', $dados['email']);
        $stmt->bindParam(':cs_sexo', $dados['sexo']);
        $stmt->bindParam(':nm_cidade', $dados['cidade']);
        $stmt->bindParam(':sg_estado', $dados['estado']);
        $stmt->bindParam(':tx_observacao', $dados['observacoes']);

        $stmt->bindParam(':id_dono', $id_dono);
        return $stmt->execute();
    }


}
