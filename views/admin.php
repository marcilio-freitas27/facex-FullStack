<?php 
  include 'db.php';
  $sqlum = "SELECT id, nome,setor_trabalho,funcao_setor FROM cadastro";
  $queryum = mysqli_query($con,$sqlum);
?>


<div class="d-grip gap-2"></div>
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
    <div class="card">
      <h2 class="card-header">Funcionarios que responderam ao questionário</h2>
        <table class='card-body table display' id="myTable">
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
                  . "<td>" . '#' . "</td>"
                  . "<td>" . $linha['nome'] . "</td>"
                  . "<td>" . $linha['funcao_setor'] . "</td>"
                  . "<td>" . $linha['setor_trabalho'] . "</td>";
                  ?>

              <td><a href="?pagina=editar&id=<?php echo $linha['id']?>">Editar</a></td>
          </tr>
        <?php }?>
        </table>
    </div>
  </div>
</section>



