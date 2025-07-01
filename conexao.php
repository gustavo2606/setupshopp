<?php


$servidor = 'localhost';
$bd = 'bd_loja';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conexao){
    die("deu ruim " . mysqli_connect_error());
}

?>
