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
include_once("conexao.php");

$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);

$mysqli = mysqli_query($conexao, "INSERT INTO login_page(nome, sobrenome, email, senha)
VALUES ('$nome', '$sobrenome', '$email', '$hash')");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="index.php" method="POST">
        <legend><b>Cadastro de dados</b></legend>
        <br>
        <input type="text" name="Nome" minlength="2" pattern="[A-Za-zÀ-ú\s]+" required>
        <label for="">Primeiro Nome</label>
        <br>
        <input type="text" name="Sobrenome" required>
        <label for="">Segundo nome</label>
        <br>
        <input type="email" name="Email" maxlength="45" required>
        <label for="">Email</label>
        <br>
        <input type="password" name="Senha" minlength="6" maxlength="45" required>
        <label for="">Senha</label>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>