<?php
/* Teste para verificar o funcionamento do envio

    if (isset($_POST['submit'])) {
        print_r($_POST['Nome']);
        print_r("<br>");
        print_r($_POST['Sobrenome']);
        print_r("<br>");
        print_r($_POST['Email']);
        print_r("<br>");
        print_r($_POST['Password']);
    }

*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <legend><b>Cadastro de dados</b></legend>
        <br>
        <input type="text" name="Nome" required>
        <label for="">Primeiro Nome</label>
        <br>
        <input type="text" name="Sobrenome" required>
        <label for="">Segundo nome</label>
        <br>
        <input type="email" name="Email" required>
        <label for="">Email</label>
        <br>
        <input type="password" name="Password" required>
        <label for="">Senha</label>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>