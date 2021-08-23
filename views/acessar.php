<section class="gap-1">
<div class="p-2 container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Acessar</div>
                <div class="card-body">
                    <form method="POST" action="login.php">
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">Senha</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control"  name="senha" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Lembre-me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-danger">
                                    Entrar
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
