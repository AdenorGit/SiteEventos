<?php include VIEW . "Include/inc_head.php"; ?>

<?php include VIEW . "Include/inc_header.php"; ?>

<main>
    <section>

    <div class="msg" id="msg">
        <p id="msg-p">Mensagem de teste</p>
    </div>

        <h1>LOGIN</h1>

        <div class="container-login">
            <form class="form-login" method="POST">
                <div class="group-form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="group-form">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

    </section>
</main>

<?= $js_user_login ?? '' ?>

<?php include VIEW . "Include/inc_footer.php"; ?>