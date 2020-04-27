<?php 

include 'conexao_db/conexao.php';

$id = $_GET['id'];

$deletar = "DELETE FROM usuarios WHERE id = $id";
$execute = mysqli_query($conexao,$deletar);

header("Location: aprovar_usuario.php");