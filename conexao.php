<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbSenha = '';
    $dbName = 'login-page';

    $conexao = new mysqli($dbHost, $dbUser, $dbSenha, $dbName);

/* Teste

     if ($conexao->connect_errno) {
         echo "erro";
     } else {
         echo "conexao efetuada com sucesso";
     }
         
*/
?>