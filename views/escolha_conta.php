<?php

include 'db.php';


// pega o valor do campo no página header.php
$usuario = $_SESSION['nome'];

$sql_user = "SELECT permissao FROM funcionarios WHERE nome = '$usuario'";
$query_user = mysqli_query($con,$sql_user);

// se permissão igual a 1 = admin; Qualquer outra, comum.
foreach ($query_user as $linha){
    if ($linha['permissao'] == 1){
        
        header("location: index.php?pagina=admin");
            
    }else {
        header("location: index.php?pagina=conta");
            
    }
    
}
