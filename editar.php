<?php 
    include 'db.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];// erros
    $setor = $_POST['setor'];// erros

    
    $query = "UPDATE cadastro SET nome = '$nome', setor_trabalho = '$setor',  funcao_setor = '$funcao'  WHERE id = $id";

    mysqli_query($con, $query);
    
    header('location: index.php?pagina=admin');
?>