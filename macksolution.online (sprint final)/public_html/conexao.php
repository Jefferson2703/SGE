<?php

function conectar(){
    $servidor = "localhost";
	$usuario = "u499668582_sge";
	$senha= "@07094@";
	$bd = "u499668582_sge";
	
	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
	$cfg['Lang'] = 'en-utf-8';
}

$conexao = conectar();


?>

