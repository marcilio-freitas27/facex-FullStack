<?php

// session_start();
include 'db.php';
// pega o valor dos campos no página form.php
$acompanhante = $_POST['acompanhante'];

if($_POST['acompanhante'] == 'sim'){
    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $funcao = $_POST['funcao'];
    $acompanhante = $_POST['acompanhante'];

    $query = "INSERT INTO cadastro(nome,setor_trabalho,funcao_setor,acompanhante) values ('$nome','$setor','$funcao','$acompanhante')";
    mysqli_query($con,$query);

    header('location: index.php?pagina=form-partner');
}else {
    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $funcao = $_POST['funcao'];
    $acompanhante = $_POST['acompanhante'];

    $query = "INSERT INTO cadastro(nome,setor_trabalho,funcao_setor,acompanhante) values ('$nome','$setor','$funcao','$acompanhante')";
    mysqli_query($con,$query);

    header('location: index.php?pagina=home');
}

