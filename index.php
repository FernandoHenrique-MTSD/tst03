<?php
include('conexao.php');

if(isset($_POST['e-mail']) || isset($_POST['senha'])) {
    if(strlen)($_POST['email']) == 0 {
        echo "PREENCHA SEU E-MAIL";
        } else if (strlen($_POST['senha']) == 0) {
    echo "PREENCHA SUA SENHA";
} else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysql->query($sql_code) or die("FALHA NA EXECUCAO SQL" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

    $_SESSION['id'] = $usuario['id'];

    header("Location: painel.php");
        
    } else {
        echo "FALHA AO LOGAR ! E-MAIL OU SENHA INCORRETOS"
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLogin</title>
</head>
<body>
    <h1>ACESSE SUA CONTA</h1>
    <form action="" method="POST">
        <label> E-MAIL <label>
        <p>
        <input type="text" name="email">
        </p>
        <label> SENHA <label>
        <p>
        <input type="password" name="senha">
        </p>
        <p>
        <button type="submit">LOGIN</button>
        </p>
</form>
</body>
</html>
