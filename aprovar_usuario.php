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
			<a href="index.php" class="btn btn btn-primary btn-sm" >Voltar</a>
		</div>
		<h3 style="padding: 1em;">Listagem de aprovação de cadastros</h3>
		<table class="table table-hover">
		  <thead class="text-center">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nome</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Nível de acesso</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  
		    	<?php 
				  include 'conexao_db/conexao.php';
				  $query = "SELECT * FROM curso_udemy.usuarios WHERE status = 'Inativo';";
				  $search = mysqli_query($conexao,$query);



				  while ($credenciais = mysqli_fetch_array($search)) {
				  
				 /* echo "<pre>";
				  print_r($credenciais);
				  exit; */


				  	$id = $credenciais['id'];
				  	$nome = $credenciais['nome'];
				  	$mail = $credenciais['email'];
				  	$nivel = $credenciais['nivel'];
		  		 ?>
		 	<tr class="text-center">
		      <td><?php echo $id ?></td>
		      <td><?php echo $nome ?></td>
		      <td><?php echo $mail ?></td>
		      <td><?php echo $nivel ?></td>
		   
		      <td>
		      	<div class="text-center">
			      	<a class="btn btn-success btn-sm" href="_aprovar_usuario.php?id=<?php echo $id ?>&nivel=1" role="button"><i class="fas fa-user-cog">&nbsp</i>Administrador</a>

			      	<a class="btn btn-warning btn-sm" href="_aprovar_usuario.php?id=<?php echo $id ?>&nivel=2" role="button"><i class="fas fa-thumbs-up">&nbsp</i>Funcionário</a>

			      	<a class="btn btn-dark btn-sm" href="_aprovar_usuario.php?id=<?php echo $id ?>&nivel=3" role="button"><i class="fas fa-book-reader">&nbsp</i>Conferente</a>

			      	<a class="btn btn-danger btn-sm" href="deletar_usuario.php?id=<?php echo $id ?>" role="button"><i class="fas fa-user-minus">&nbsp.</i>Excluir</a>	
			   </div>

		      </td>

		  		<?php } ?>

		  	</tr>

		</table>
	</div>
</body>
</html>