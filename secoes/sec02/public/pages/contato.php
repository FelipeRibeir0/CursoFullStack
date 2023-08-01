<?= get('message')?>


<div class="row justify-content-center">
    <div class="col-lg-9">
        <h1 class="mb-3">Contatos</h1>
        <form action="pages/forms/contato.php" method="post" role="form" autocomplete="off">
            <div class="row g-1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Digite o seu nome" name="name">
                    <label for="floatingName">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingSubject" placeholder="Digite o assunto" name="subject">
                    <label for="floatingSubject">Assunto</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" style="height: 100px;" placeholder="Digite sua mensagem" id="floatingTextarea" name="message"></textarea>
                    <label for="floatingTextarea">Mensagem</label>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark w-100 fw-bold">Enviar</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>