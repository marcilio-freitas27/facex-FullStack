<section>
    <div class="container">
    <main>
        <div class="py-5 text-center">
        
        <h2>Dados de Usuário</h2>
        </div>

        <div class="row">
        <div class="">
            <h4 class="mb-3">Dados Pessoais</h4>

            <hr class="my-4">

            <form class="needs-validation" action="?pagina=home" method="post" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-6">
                <label for="username" class="form-label">Telefone</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" placeholder="Telefone" value="" required>
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
                </div>

                <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="col-6">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" value="" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
                </div>

                <div class="col-md-5">
                <label for="country" class="form-label">País</label>
                <input type="text" class="form-control" id="country" value="" required>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
                </div>

                <div class="col-md-4">
                <label for="state" class="form-label">Estado</label>
                <input type="text" class="form-control" id="state" value="" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
                </div>

                <div class="col-md-3">
                <label for="zip" class="form-label">Cep</label>
                <input type="text" class="form-control" id="zip" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Zip code required.
                </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </div>

            <hr class="my-5">

            </form>
        </div>
        </div>
    </main>
    </div>
</section>