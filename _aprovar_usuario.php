<?php 

include 'conexao_db/conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel = 1 WHERE id = $id";
	echo 'Adminsitrador aprovado!';
	$atualizacao = mysqli_query($conexao,$update);
}

if ($nivel == 2) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel = 2 WHERE id = $id";
	echo 'Funcionário aprovado!';
	$atualizacao = mysqli_query($conexao,$update);
}

if ($nivel == 3) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel = 3 WHERE id = $id";
	echo 'Conferente aprovado!';
	$atualizacao = mysqli_query($conexao,$update);
}



