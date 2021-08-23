<section class="gap-1">
<div class="p-2 container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registrar</div>

                <div class="card-body">
                    <form method="POST" action="../inserir_usuario.php">
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Nome</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="nome" value="" required autocomplete="name" autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">Senha</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="senha" required>
                            </div>
                        </div>

                        <div class="form-group row p-2">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-danger">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
