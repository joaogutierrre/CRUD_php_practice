<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Categorias</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://kit.fontawesome.com/8038ba999d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" id="table">
		<div class="container text-center" style="padding: 1em;">
			<a href="../index.php" class="btn btn btn-primary btn-sm" >Voltar</a>
		</div>
		<h3 style="padding: 1em;">Listagem de Categorias</h3>
		<table class="table">
		  <thead class="text-center">
		    <tr>
		      <th scope="col">ID Categoria</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  
		    	<?php 
				  include '../conexao_db/conexao.php';
				  $query = "SELECT * FROM curso_udemy.categoria;";
				  $search = mysqli_query($conexao,$query);



				  while ($credenciais = mysqli_fetch_array($search)) {
				  
				 /* echo "<pre>";
				  print_r($credenciais);
				  exit; */


				  	$idCategoria = $credenciais['id'];
				  	$nomeCategoria = $credenciais['nome'];
		  		 ?>
		 	<tr>
		      <td><?php echo $idCategoria  ?></td>
		      <td><?php echo $nomeCategoria  ?></td>
		   
		      <td>
		      	<div class="text-center">
			      	<a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $idCategoria ?>" role="button"><i class="fas fa-edit"></i>Editar</a>
			      	<a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php echo $idCategoria ?>" role="button"><i class="fas fa-user-minus"></i>Deletar</a>
				  	
			   </div>

		      </td>

		  		<?php } ?>

		  	</tr>

		</table>
	</div>
</body>
</html>