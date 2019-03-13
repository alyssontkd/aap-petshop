<?php

require_once 'DB.php';

abstract class Crud extends DB {

    public $table;

    abstract public function insert();

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete_fisico($id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id_dono = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public static function executarConsultaSQLParaColecao($sQuery) {
        $stmt = DB::prepare($sQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function truncate() {
        $sql = "TRUNCATE $this->table";
        $stmt = DB::prepare($sql);
        return $stmt->execute();
    }
}
