
<main class="container col-md-9  col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>

  <div>
  <?php include "dashboard.php";?>

  <h2>Funcionarios que responderam ao questionário</h2>
    <table class='table'>
    <tr>
      <th >#</th>
      <th >Nome</th>
      <th >Função</th>
      <th >Editar</th>
    </tr>
    
    <?php 
      include 'db.php';
      $sqlum = "SELECT id, nome,funcao_setor FROM cadastro";
      $queryum = mysqli_query($con,$sqlum);

      while ($linha = mysqli_fetch_array($queryum)) {
        echo "<table class='table table-hover'><tr>"?>

            <td>#</td>
            <td><?php echo $linha['nome']?></td>
            <td><?php echo $linha['funcao_setor']?></td>
            <td><a href="?pagina=editar&id=<?php echo $linha['id']?>">Editar</a></td>
            </tr>
            </table></table>
      <?php }?>
  </div>
</main>

