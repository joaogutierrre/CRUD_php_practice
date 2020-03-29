<?php 

include '../conexao_db/conexao.php';

$idCategoria = $_GET['id'];

$query = "DELETE FROM `curso_udemy`.`categoria` WHERE (`id` = $idCategoria);";

$destroy = mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center>
			<h3>Excluido com sucesso</h3>
			<div style="margin-top: 1em;">
				<a href="listagem_categoria.php" class="btn btn-success">Voltar</a>
			</div>
		</center>
	</div>
</body>
</html>