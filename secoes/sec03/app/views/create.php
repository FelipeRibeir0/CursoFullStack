<?php $this->layout('master', ['title' => $title]) ?>
<h2>Create</h2>

<?php echo getFlash('message') ?>

<form action="/user/store" method="post" id="createForm" autocomplete="off">

    <?php echo getCsrf(); ?>

    <input type="text" name="firstname" placeholder="Nome" value="<?php echo getOld('firstname') ?>">
    <?php echo getFlash('firstname') ?>
    <input type="text" name="lastname" placeholder="Sobrenome" value="<?php echo getOld('lastname') ?>">
    <?php echo getFlash('lastname') ?>
    <input type="email" name="email" placeholder="Email" value="<?php echo getOld('email') ?>">
    <?php echo getFlash('email') ?>
    <input type="password" name="password" placeholder="Senha" value="<?php echo getOld('password') ?>">
    <?php echo getFlash('password') ?>
    <button type="submit">Create</button>

</form>