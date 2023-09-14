<?php $this->layout('master', ['title' => $title]) ?>
<h2>Login</h2>
<?php if(!logged()) : ?>
    <form id="form-box" action="/login" method="post" autocomplete="off">
    <?php echo getFlash('message') ?>
    <input type="email" name="email" placeholder="Insira o seu email">
    <input type="password" name="password" placeholder="Insira a sua senha">
    <button type="submit">Login</button>
</form>
<?php else: ?>
<h2>Você já está logado</h2>
<?php endif ?>