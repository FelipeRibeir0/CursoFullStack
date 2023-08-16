<h2>Login</h2>

<?php echo getFlash('message') ?>
<?php if(!logged()) : ?>
<form id="box-login" action="/login" method="post" autocomplete="off">
    <input type="email" name="email" placeholder="Insira o seu email">
    <input type="password" name="password" placeholder="Insira a sua senha">
    <button type="submit">Login</button>
</form>
<?php else: ?>
<h2>Você já está logado</h2>
<?php endif ?>