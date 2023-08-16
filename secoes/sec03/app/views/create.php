<h2>Create</h2>

<?php echo getFlash('message')?>

<form action="/user/store" method="post" id="createForm" autocomplete="off">
    <input type="text" name="firstname" placeholder="Nome">
    <?php echo getFlash('firstname')?>
<input type="text" name="lastname" placeholder="Sobrenome">
<?php echo getFlash('lastname')?>
<input type="email" name="email" placeholder="Email">
<?php echo getFlash('email')?>
<input type="password" name="password" placeholder="Senha">
<?php echo getFlash('password')?>
<button type="submit">Create</button>
</form>