<?php
include('conexao.php');
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
