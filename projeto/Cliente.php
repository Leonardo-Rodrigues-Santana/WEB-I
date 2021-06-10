<?php

/**
* herda da classe crudAlunos
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/

require_once 'CrudCliente.php';

class Cliente extends CrudCliente {
protected $tabela = 'cliente'; //define a tabela do banco
//busca 1 item
public function findUnit($idcliente) {
$sql = "SELECT * FROM $this->tabela WHERE idcliente = :idcliente";
$stm = DB::prepare($sql);
$stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
$stm->execute();
return $stm->fetch();
}
//busca todos os itens
public function findAll() {
$sql = "SELECT * FROM $this->tabela";
$stm = DB::prepare($sql);
$stm->execute();
return $stm->fetchAll();
}
//faz insert
public function insert() {
$sql = "INSERT INTO $this->tabela (idcliente, nomecliente, cpfcliente, rgcliente, sexocliente, datanascimento, debito) VALUES (:idcliente, :nomecliente, :cpfcliente, :rgcliente, :sexocliente, :datanascimento, :debito)";
$stm = DB::prepare($sql);
$stm->bindParam(':idcliente', $this->idcliente);
$stm->bindParam(':nomecliente', $this->nomecliente);
$stm->bindParam(':cpfcliente', $this->cpfcliente);
$stm->bindParam(':rgcliente', $this->rgcliente);
$stm->bindParam(':sexocliente', $this->sexocliente);
$stm->bindParam(':datanascimento', $this->datanascimento);
$stm->bindParam(':debito', $this->debito);
return $stm->execute();
}
//update de itens
public function update($idcliente) {
$sql = "UPDATE $this->tabela SET nomecliente = :nomecliente, cpfcliente = :cpfcliente, rgcliente = :rgcliente, sexocliente = :sexocliente, datanascimento = :datanascimento, debito = :debito WHERE idcliente = :idcliente";
$stm = DB::prepare($sql);
$stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
$stm->bindParam(':nomecliente', $this->nomecliente);
$stm->bindParam(':cpfcliente', $this->cpfcliente);
$stm->bindParam(':rgcliente', $this->rgcliente);
$stm->bindParam(':sexocliente', $this->sexocliente);
$stm->bindParam(':datanascimento', $this->datanascimento);
$stm->bindParam(':debito', $this->debito);
return $stm->execute();
}
//deleta 1 item
public function delete($idcliente) {
$sql = "DELETE FROM $this->tabela WHERE idcliente = :idcliente";
$stm = DB::prepare($sql);
$stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
return $stm->execute();
}
}

?>
