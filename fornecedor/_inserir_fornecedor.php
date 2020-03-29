<?php 

include '../conexao_db/conexao.php';

$nomeFornecedor = $_POST['nomeFornecedor'];
$cnpjFornecedor = $_POST['cnpj'];

$sql = "INSERT INTO `curso_udemy`.`fornecedor` (`nome`, `cnpj`) VALUES ('$nomeFornecedor', '$cnpjFornecedor');";

$query = mysqli_query($conexao,$sql);
/*print_r($sql);
exit;*/


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
			<h3>Fornecedor inserido com sucesso!</h3>
			<div style="margin-top: 1em;">
				<a href="../index.php" class="btn btn-success">Voltar</a>
			</div>
		</center>
	</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
</body>
</html>