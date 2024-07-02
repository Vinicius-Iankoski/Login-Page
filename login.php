<?php

    if(isset($_POST['email'])) {
        include('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM login_page WHERE email = '$email' LIMIT 1";
        // responsável por selecionar o email na base de dados

        $sql_exec = mysqli_query($conexao, $sql_code) or die($mysqli->error);
        // responsável por encontrar o email

        $usuario = $sql_exec->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])){
            echo "usuario logado com sucesso!";
        } else {
            echo "email ou senha incorretos.";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <legend><b>Login na conta</b></legend>
        <br>
        <input type="email" name="email">
        <label for="">Email</label>
        <br>
        <input type="password" name="senha">
        <label for="">Senha</label>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>