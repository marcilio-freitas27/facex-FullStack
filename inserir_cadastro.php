<?php

include 'db.php';

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$funcao = $_POST['funcao'];
$acompanhante = $_POST['acompanhante'];

$query = "INSERT INTO cadastro(nome,setor_trabalho,funcao_setor,acompanhante) values ('$nome','$setor','$funcao','$acompanhante')";
mysqli_query($con,$query);

header('location: index.php?pagina=admin');