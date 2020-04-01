<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Fornecedores</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://kit.fontawesome.com/8038ba999d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" id="table">
		<div class="container text-center" style="padding: 1em;">
			<a href="../index.php" class="btn btn btn-primary btn-sm" >Voltar</a>
		</div>
		<h3 style="padding: 1em;">Listagem de Fornecedores</h3>
		<table class="table">
			<thead class="text-center">
				<tr>
					<th scope="col">ID Fornecedor</th>
					<th scope="col">Nome</th>
					<th scope="col">CNPJ</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>

			<?php 
			include '../conexao_db/conexao.php';
			$queryFornecedor = "SELECT * FROM curso_udemy.fornecedor";
			$search = mysqli_query($conexao,$queryFornecedor);

			while($credenciaisFornecedor = mysqli_fetch_array($search)){
				$idFornecedor = $credenciaisFornecedor['id'];
				$nomeFornecedor = $credenciaisFornecedor['nome'];
				$cnpjFornecedor = $credenciaisFornecedor['cnpj'];
			
			?>
			<tbody class="table">
				<tr>
				<td><?php echo $idFornecedor ?></td>
				<td><?php echo $nomeFornecedor ?></td>
				<td><?php echo $cnpjFornecedor ?></td>
				<td>
					<div class="text-center">
						<a class="btn btn-warning btn-sm" href="editar_fornecedor.php?id=<?php echo $idFornecedor ?>">Editar</a>
						<a class="btn btn-danger btn-sm" href="deletar_fornecedor.php?id=<?php echo $idFornecedor ?>">Deletar</a>
					</div>
				</td>
				<?php } ?>
			</tr>
			</tbody>
			
		</table>
	</div>	
</body>
</html>