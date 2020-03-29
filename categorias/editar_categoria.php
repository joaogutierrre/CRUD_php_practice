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
<body>
	<div class="container" id="container">
		
		<h3 class="text-center">Editar Categoria de Produto</h3>
		<form action="_atualizar_categoria.php" method="post">
		<?php

				$query = "SELECT * FROM curso_udemy.categoria WHERE id = $id;";
				$search = mysqli_query($conexao,$query);

				  while ($credenciais = mysqli_fetch_array($search)) {
				  				
				  	$idCategoria = $credenciais['id'];
				  	$nomeCategoria = $credenciais['nome'];
				  	
				  	/*echo "<pre>";
				  	print_r($credenciais);
				  	exit;*/
				  	
		?>
		  <div class="form-group">
		  	<label>ID do Produto </label>
		  	<input type="number" class="form-control" name="idCategoria" value="<?php echo $idCategoria; ?>" disabled="">
		  	<input type="number" class="form-control" name="idCategoria" value="<?php echo $idCategoria; ?>" style="display: none;">
		  </div>	

		  <div class="form-group">
		  	<label>Nome do Produto</label>
		  	<input type="text" class="form-control" name="nomeCategoria" value="<?php echo $nomeCategoria; ?>">
		  </div>
		  
		  <div class="form-group" id="divbotao">
		  	<button type="submit" class="btn btn-primary btn-sm" id="botao">Salvar Alterações</button>
		  </div>
		 <?php } ?>
		</form>
	</div>
	


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>