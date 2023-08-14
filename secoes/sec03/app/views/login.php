
<h2>Login</h2>

<?php echo getFlash('message') ?>
<form id="box-login" action="/login" method="post" autocomplete="off">
    <input type="email" name="email" placeholder="Insira o seu email">
    <input type="password" name="password" placeholder="Insira a sua senha">
    <button type="submit">Login</button>
</form>