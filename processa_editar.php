
<!-- busca pelo conteúdo a ser alterado-->
<?php 

include 'db.php';

$id = $_GET['id'];

$sqli = "SELECT nome, funcao_setor, setor_trabalho FROM cadastro WHERE id = $id";

$queryi = mysqli_query($con,$sqli);

foreach($queryi as $linha) { ?>
<div class="container gap-1">
    <div class="row justify-content-center">
        <div class="col-md-6 p-2">
            <div class="card">
                <div class="card-header"><h6>Editar funcionario</h6></div>
                    <div class="card-body">
                        <form method="POST" action="editar.php">
                            <div class="">
                                <input type="hidden" name="id" value="<?php echo $id?>">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nome</label><br>
                                    <div class="col-md-8">
                                        <input class="form-control"type="text" name="nome"
                                        value="<?php echo $linha['nome']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Função</label><br>
                                    <div class="col-md-8">
                                        <input class="form-control"type="text" name="funcao"
                                        value="<?php echo $linha['funcao_setor']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Setor</label><br>
                                    <div class="col-md-8">
                                        <input class="form-control"type="text" name="setor" 
                                        value="<?php echo $linha['setor_trabalho']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <button class="btn btn-danger" type="submit">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
