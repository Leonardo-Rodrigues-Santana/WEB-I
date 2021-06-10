<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudCliente extends DB { //faz herança do arquivo DB
protected $tabela;
public $idcliente;
public $nomecliente;
public $cpfcliente;
public $rgcliente;
public $sexocliente;
public $datanascimento;
public $debito;

public function setIdcliente($idcliente) {
$this->idcliente = $idcliente;
}
public function getIdcliente() {
return $this->idcliente;
}
public function setNomecliente($nomecliente) {
$this->nomecliente = $nomecliente;
}
public function getNomecliente() {
return $this->nomecliente;
}
public function setCpfcliente($cpfcliente) {
$this->cpfcliente = $cpfcliente;
}
public function getCpfcliente() {
return $this->cpfcliente;
public function setRgcliente($rgcliente) {
$this->rgcliente = $rgcliente;
}
public function getRgcliente() {
return $this->rgcliente;
public function setSexocliente($sexocliente) {
$this->sexocliente = $sexocliente;
}
public function getSexocliente() {
return $this->sexocliente;
public function setDatanascimento($datanascimento) {
$this->datanascimento = $datanascimento;
}
public function getDatanascimento() {
return $this->datanascimento;
public function setDebito($debito) {
$this->debito = $debito;
}
public function getDebito() {
return $this->debito;

}
?>
