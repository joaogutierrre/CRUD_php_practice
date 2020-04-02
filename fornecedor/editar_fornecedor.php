<?php 

include '../conexao_db/conexao.php';

$id = $_GET['id'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>	
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
 </head>
 <body>
 	<div class="container" id="container">
 		<h3 class="text-center">Editar Fornecedor</h3>
 		<form action="_atualizar_fornecedor.php" method="post">
 			<?php 

            	$query = "SELECT * FROM  curso_udemy.fornecedor WHERE id = $id";
            	$search =mysqli_query($conexao,$query);

            	while($credenciaisFornecedor = mysqli_fetch_array($search)){

            		$idFornecedor = $credenciaisFornecedor['id'];
            		$nomeFornecedor = $credenciaisFornecedor['nome'];
					$cnpjFornecedor = $credenciaisFornecedor['cnpj'];
 			 ?>
 			 <div class="form-group">
 			 	<label>ID do Fornecedor</label>
 			 	<input type="number" class="form-control" name="idFornecedor" value="<?php echo $idFornecedor; ?>" disabled="">
 			 	<input type="number" class="form-control" name="idFornecedor" value="<?php echo $idFornecedor; ?>" style="display: none;" disabled="">
 			 </div>

 			 <div class="form-group">
 			 	<label>Nome do Fornecedor</label>
 			 	<input type="text" class="form-control" name="nomeFornecedor" value="<?php echo $nomeFornecedor; ?>">
 			 </div>
 			 <div class="form-group">
 			 	<label>CNPJ</label>
 			 	<input type="text" class="form-control" name="cnpjFornecedor" value="<?php echo $cnpjFornecedor ?>"></input>
 			 </div>
 			 <div class="form-group" id="divbotao">
		  	<button type="submit" class="btn btn-primary btn-sm" id="botao">Salvar Alterações</button>
		  </div>
		 <?php } ?>
 		</form>
 	</div>
 </body>
 </html>