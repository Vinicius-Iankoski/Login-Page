<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <legend><b>Cadastro de dados</b></legend>
        <br>
        <input type="text" name="PrimeiroNome" required>
        <label for="">Primeiro Nome</label>
        <br>
        <input type="text" name="SegundoNome" required>
        <label for="">Segundo nome</label>
        <br>
        <input type="email" name="Email" required>
        <label for="">Email</label>
        <br>
        <input type="password" name="Password" required>
        <label for="">Senha</label>
        <br>
        <input type="submit" name="Submit">
    </form>
</body>
</html>