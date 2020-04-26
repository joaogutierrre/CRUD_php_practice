<?php 


include 'conexao_db/conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome,email,senha,nivel,status) values ('$nomeusuario','$mail',sha1('$senha'),'$nivel','$status')";

$inserir = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="padding: 1em;">
	<div class="container">

		<center>
			<h3>Usuario cadastrado com sucesso!</h3>
			<div style="margin-top: 1em;">
				<a href="cadastrar_usuario.php" class="btn btn-success">Voltar</a>
			</div>
		</center>
	</div>