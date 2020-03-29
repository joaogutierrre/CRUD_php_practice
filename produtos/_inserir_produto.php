<?php 

include '../conexao_db/conexao.php';

$nomeproduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$qtdproduto = $_POST['qtdProduto'];
$fornecedor = $_POST['fornecedor'];

 $sql = "INSERT INTO `curso_udemy`.`produto` (`nomeProduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$nomeproduto', '$categoria', $qtdproduto, '$fornecedor');";

 $inserir = mysqli_query($conexao,$sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="padding: 1em;">
		<center>
			<div style="padding: 1em;">
				<a href="../index.php" class="btn btn-primary btn-sm">Voltar</a>
			</div>
		</center>
		<center>
			<h3>Inserido com sucesso</h3>
			<div style="margin-top: 1em;">
				<a href="listagem_produtos.php" class="btn btn-success btn-sm">Listar Produtos</a>
			</div>
		</center>
		
	</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
</body>
</html>

 