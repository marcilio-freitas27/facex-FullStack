<?php

include 'db.php';

// pega o valor dos campos no página acessar.php
$usuario = $_POST['email'];
$senha = $_POST['senha'];

$sql_user = "SELECT permissao FROM funcionarios WHERE email = '$usuario'";
$sql_pass = "SELECT permissao FROM funcionarios WHERE senha = '$senha'";
$query_user = mysqli_query($con,$sql_user);
$query_pass = mysqli_query($con,$sql_pass);

$sql_name = "SELECT nome FROM funcionarios WHERE email = '$usuario'";
$query_name = mysqli_query($con,$sql_name);
foreach ($query_name as $valor){
    $nome = $valor['nome'];
}

foreach ($query_user as $linha){
    if ($linha['permissao'] == 1){
        foreach ($query_pass as $row){
            if ($row['permissao'] == 1){
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $usuario;
                $_SESSION['nome'] = $nome;
                header("location: index.php?pagina=admin");
            }else {
                //senha incorreta
                header("location: index.php?pagina=acessar");
            }
        }
    
    } else {
        foreach ($query_pass as $row){
            if ($row['permissao'] == 0){
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $usuario;
                $_SESSION['nome'] = $nome;
                header("location: index.php?pagina=conta");
            }else {
                //senha incorreta
                header("location: index.php?pagina=acessar");
            }
        }
    }
}
