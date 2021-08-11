<?php

session_start();
include 'db.php';

include 'header.php';

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
}else {
    $pagina ='home';
}

switch ($pagina) {
    case 'acessar':
        include 'views/acessar.php';
        break;
    case 'registrar':
        include 'views/registrar.php';
        break;
    case 'home':
        include 'views/home.php';
        break;
    case 'form':
        include 'views/form.php';
        break;
    case 'form-partner':
        include 'views/form-partner.php';
        break;
    case 'admin':
        include 'views/admin.php';
        break;
    case 'conta':
        include 'views/conta.php';
        break;
    case 'editar':
        include 'processa_editar.php';
        break;
}


include 'footer.php';