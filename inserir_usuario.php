<?php

include 'db.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO funcionarios(nome,email,senha) values ('$nome','$email','$senha')";
mysqli_query($con,$query);

header('location: index.php?pagina=admin');
