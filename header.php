<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Festa do ano - Facex/Unifacex</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/> 
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    </head>
  <body class="d-flex flex-column h-100">
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-primary">
    <div class="container-fluid ">
      <a class="navbar-brand" href="?pagina=home"><img src="img/facex.webp" alt="facex"></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="dropdown" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      
      <div class="collapse navbar-collapse d-grid gap-0 d-sd-flex d-flex justify-content-end" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown ">
            <a id="dLabel" type="button" class="nav-link dropdown-toggle btn btn-danger text-white me-md-5" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul style="min-width: .5em;"class="dropdown-menu" aria-labelledby="dLabel">
            <?php if (isset($_SESSION['login'])) { ?>
                  <li><a class="dropdown-item" href="logout.php">
                      <?php echo $_SESSION['nome'];?> (sair)
                      </a></li>
                  <li><a href="?pagina=admin" class="dropdown-item">Conta</a></li>
              <?php }else{ ?>
                <li><a href="?pagina=acessar" id='acessar' class="dropdown-item">Acessar</a><li>
                <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  </body>
  </html>
