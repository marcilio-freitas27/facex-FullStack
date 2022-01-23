<?php 
  include 'db.php';
  $sqlum = "SELECT id, nome,setor_trabalho,funcao_setor FROM cadastro";
  $queryum = mysqli_query($con,$sqlum);
?>


<div class="d-grip gap-2">
<section class="container">
  
  <div class="p-2">
    <article class="card">
      <h1 class="h2 card-header">Dashboard</h1>
      <article class="card-body">
        <?php include "dashboard.php";?>
      </article>
    </article>
  </div>
  
  <div class="p-2">
    <div class="card table-responsive" id="no-more-tables">
      <h2 class="card-header pb-2">Funcionarios que responderam ao questionário</h2>
        <table class='card-body table table-striped w-auto display' id="myTable">
          <thead>  
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Função</th>
              <th scope="col">Setor</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
        <?php
          while ($linha = mysqli_fetch_array($queryum)) {
            echo 
                  "<tr>"
                  . "<td data-title='#'>" . '#' . "</td>"
                  . "<td data-title='Nome'>" . $linha['nome'] . "</td>"
                  . "<td data-title='Função'>" . $linha['funcao_setor'] . "</td>"
                  . "<td data-title='Setor'>" . $linha['setor_trabalho'] . "</td>";
                  ?>

              <td><a href="?pagina=editar&id=<?php echo $linha['id']?>">Editar</a></td>
          </tr>
        <?php }?>
        </table>
    </div>
  </div>
</section>
</div>



