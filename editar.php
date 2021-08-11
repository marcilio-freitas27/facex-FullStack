<?php 
    include 'db.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao_setor'];
    $setor = $_POST['setor_trabalho'];

    
    $query = "UPDATE cadastro SET nome = '$nome', funcao_setor = '$funcao', setor_trabalho = '$setor'  WHERE id = $id";

    mysqli_query($con, $query);

    
    header('location: index.php?pagina=admin');
?>