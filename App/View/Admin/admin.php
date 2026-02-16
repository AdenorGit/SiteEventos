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
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>


<?php include VIEW . "Include/inc_admin_footer.php" ?>