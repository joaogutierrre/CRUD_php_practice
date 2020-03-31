<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>
	<div class="container text-center" style="padding: 1em;">
		<a href="../index.php" class="btn btn btn-primary btn-sm" >Voltar</a>
	</div>
		
	<div class="container" id="container">
		
		<h3 class="text-center">Cadastro de Produto</h3>
		<form action="_inserir_produto.php" method="post">
		  <div class="form-group">
		  	<label>Nome do Produto</label>
		  	<input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" required="" autocomplete="off">
		  </div>
		  <div class="form-group">
		  	<label>Categoria:</label>
		  	<select class="custom-select" name="categoria" required="">
		  		<option value="" selected="">.: Selecione :.</option>
			  	<?php 
			  	include_once '../conexao_db/conexao.php';
			  	$sql = 	"SELECT * FROM curso_udemy.categoria;";
			  	$query = mysqli_query($conexao,$sql);

			  	$sqlProd = "SELECT produto.categoria FROM cruso_udemy.produto" ;
			  	$queryProd = mysqli_query($conexao,$sqlProd);

			  	while ($credenciais = mysqli_fetch_assoc($query)) {	 ?>
			    
			      <option value="<?php echo $credenciais['id'] ?>"><?php echo $credenciais['nome'];  ?></option>
			      <?php 
											echo (isset($queryProd ));
										?>
			      
			   

			<?php } ?>

			 </select>
		  </div>
		  <div class="form-group">
		  	<label>Quantidade:</label>
		  	<input type="number" class="form-control" name="qtdProduto" placeholder="Insira a quantidade do(s) produto(s)" required="" autocomplete="off">
		  </div>
		  <div class="form-group">
		  	<label>Fornecedor:</label>
		  	<select class="custom-select" name="fornecedor" required="" autocomplete="off">
		  		<option selected>--Selecione o fornecedor--</option>
		  		<option value="fornecedorA">Fornecedor A</option>
		  		<option value="fornecedorB">Fornecedor B</option>
		  		<option value="fornecedorC">Fornecedor C</option>
		  		<option value="fornecedorD">Fornecedor D</option>
		  		<option value="fornecedorE">Fornecedor E</option>
		  	</select>
		  </div>
		  <div class="form-group" id="divbotao">
		  	<button type="submit" class="btn btn-primary btn-sm" id="botao">Cadastrar</button>
		  </div>
		  
		</form>
		
	</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>