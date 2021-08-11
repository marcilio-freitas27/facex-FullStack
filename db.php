<?php

$user = 'root';
$db ='facex_ano';
$pass = '';
$host ='localhost';

//consulta geral 

$con = mysqli_connect($host,$user,$pass,$db);

$sql = "SELECT id,nome,email,senha,permissao FROM funcionarios";

$query = mysqli_query($con,$sql);


?>


