<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8038ba999d.js" crossorigin="anonymous"></script>
</head>
<div class="container col-sm-3">
	<div class="container text-center" style="padding: 1em;">
			<a href="menu.php" class="btn btn btn-primary btn-sm" >Voltar</a>
		</div>
	<form action="_insert_usuario_externo.php" method="post">
		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" required="" autocomplete="off" placeholder="Nome completo">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="mailusuario" class="form-control" required="" autocomplete="off" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input id="txtSenha" type="password" name="senhausuario" class="form-control" required="" autocomplete="off" placeholder="Senha">
		</div>
		<div class="form-group">
			<label>Confirmar senha</label>
			<input type="password" name="senhausuario2" class="form-control" required="" autocomplete="off" placeholder="Confirmar enha" oninput="validaSenha(this)">
			<small>Repita a senha para a validação.</small>
		</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
		</div>
	</form>
</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function validaSenha(input){
			if (input.value != document.getElementById('txtSenha').value){
				input.setCustomValidity('Senhas não combinam. Tente novamente.');
			} else {
				input.setCustomValidity('');
			}
		}
	</script>
</body>
</html>