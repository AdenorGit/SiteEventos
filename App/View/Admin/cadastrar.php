<?php include VIEW . "Include/inc_admin_head.php" ?>

<?php include VIEW . "Include/inc_admin_navbar.php" ?>

<div class="alert alert-warning d-none" role="alert">
    A simple warning alert—check it out!
</div>

<main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-11 col-md-6 col-lg-4 mt-1">

                <h1 class="mb-5 text-center"><?= $h1_titulo ?></h1>

                <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>

                    <div class="mb-5 p-3 bg-body-secondary border rounded">
                        <p class="mb-3 fw-medium">Tipo</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="0" checked>
                            <label class="form-check-label" for="tipo1">
                                Usuário
                            </label>
                        </div>
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="1">
                            <label class="form-check-label" for="tipo2">
                                Administrador
                            </label>
                        </div>
                    </div>

                    <div class="mb-5 p-3 bg-body-secondary border rounded">
                        <p class="mb-3 fw-medium">Situação</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="ativo" name="ativo" checked>
                            <label class="form-check-label" for="ativo">
                                Ativo
                            </label>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>


<?php include VIEW . "Include/inc_admin_footer.php" ?>