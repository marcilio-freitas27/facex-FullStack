<section class="gap-1">
    <div class="p-2 container">
    <main class="card">
        <div class="py-5 text-center card-header">
            <h2>Dados do Funcionário</h2>
        </div>
        <div class="card-body">
            <form method='POST' id='form1' action='?pagina=inserir'>

            <div class="row">

                <form class="needs-validation" id="login" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    </div>

                    <div class="col-6">
                    <label for="setor" class="form-label">Setor de trabalho</label>
                    <select name="setor" id="input" class="form-control" required>
                        <option value="">---</option>
                        <option value="ti">TI</option>
                        <option value="adm">Administração</option>
                        <option value="ens">Ensino</option>
                    </select>
                    </div>
                    
                    <div class="col-6">
                    <label for="funcao" class="form-label">Função no setor</label>
                    <select name="funcao" id="input" class="form-control" required>
                        <option value="">---</option>
                        <option value="programador">Programador</option>
                        <option value="gestora">Gestora de RH</option>
                        <option value="professor">Professor</option>
                    </select>
                    </div>
                    
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
            </div>
            </form>
        </div>
    </main>
    </div>
</section>

<script type="javascript" src="../js/check.js"></script>
