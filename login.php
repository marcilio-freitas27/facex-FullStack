<?php

include 'db.php';

$usuario = addslashes($_POST['email']);
$senha = md5($_POST['senha']);

$query = "SELECT id, nome, email,senha, permissao FROM funcionarios WHERE email = '$usuario' AND senha = '$senha'";

$query2 = mysqli_query($con,$query);

foreach ($query2 as $linha){
    $id = $linha['id'];
    $permissao = $linha['permissao'];
    $nome = $linha['nome'];
}

$consulta = mysqli_query($con,$query);
if (mysqli_num_rows($consulta) == 0){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['email'] = $usuario;
    $_SESSION['nome'] = $nome;

    header("location: index.php?pagina=admin");
 
}  


