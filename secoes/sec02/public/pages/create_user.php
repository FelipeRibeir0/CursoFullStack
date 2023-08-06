<?= get('message') ?>

<div class="row justify-content-center">
    <div class="col-lg-9">
        <h1>Cadastrar-se</h1>
        <form action="pages/forms/create_user.php" method="post" role="form" autocomplete="off">
            <div class="row g-1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Digite o seu nome" name="name">
                    <label for="floatingName">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingLastName" placeholder="Digite o seu sobrenome" name="lastname">
                    <label for="floatingLastName">Sobrenome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Digite a senha" name="password">
                    <label for="floatingPassword">Senha</label>
                </div>
            </div>
            <div class="btnEnviar mb-3">
                <button type="submit" class="btn btn-dark w-100 fw-bold">Enviar</button>
            </div>
    </div>
    </form>
</div>
</div>