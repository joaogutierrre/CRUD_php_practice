<!DOCTYPE html>
<html>
<head>
	<title>Nova categoria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="padding: 1em;">
	<div class="container col-sm-3">
		<div class="container text-center" style="padding: 1em;">
			<a href="../index.php" class="btn btn btn-primary btn-sm" >Voltar</a>
		</div>
		<form action="_inserir_categoria.php" method="post">
	   		 <h3>Cadastro de Categoria</h3>
	   		    <div class="form-group">
			   		 <label for="exampleInputEmail1">Nome da Categoria</label>
			   		 <input type="name" class="form-control" name="nomeCategoria" placeholder="Insira o nome da nova categoria">
			   		 
	   		    </div>

	   	<div align="right"> 
   		 		<button type="submit" class="btn btn-primary btn-sm" >Cadastrar</button>
   		</div>
		</form>
	</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>