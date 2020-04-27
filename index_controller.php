<?php 

    include 'conexao_db/conexao.php';
    include 'script/password.php';

    /*echo*/ $usuario = $_POST['usuario'];
    /*echo*/ /*'<pre>';*/
    /*echo*/ $senhausuario = $_POST['senha'];
    /*echo*/ /*'<pre>';*/

    $sql = "SELECT email, senha FROM usuarios WHERE email = '$usuario'";
    $buscar = mysqli_query($conexao, $sql);

    $total = mysqli_num_rows($buscar);

    $array = mysqli_fetch_array($buscar);

    /*echo*/ $senhacodificada = sha1($senhausuario);
    /*echo*/ /*'<pre>';*/
    /*echo*/ $senha = $array['senha'];

    while ($array = mysqli_fetch_array($buscar)) {
        
        $senha = $array['senha'];

        $senhacodificada = sha1($senhausuario);

        if ($total > 0) {
                if ($senhadecodificada == $senha) {
                    header("Location: menu.php");
                } else {
                    header("Location: erro.php");
                }
        } else {
            header("Location: erro.php");
        }
    }
