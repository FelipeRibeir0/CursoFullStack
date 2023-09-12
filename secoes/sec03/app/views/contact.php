<?php $this->layout('master', ['title' => $title]) ?>

<h2>Contato</h2>

<form action="/contact" method="post" id="form-box" autocomplete="off">

    <?php echo getFlash("contact_success", "background-color:green;color:white;padding:5px;border-radius:30px") ?>
    <?php echo getFlash("contact_error", "background-color:tomato;color:white;padding:5px;border-radius:30px") ?>

    <?php echo getCsrf() ?>

    <input type="text" name="name" placeholder="Seu nome" value="<?php echo getOld('name') ?>">
    <?php echo getFlash('name') ?>
    <input type="email" name="email" placeholder="Seu email" value="<?php echo getOld('email') ?>">
    <?php echo getFlash('email') ?>
    <input type="text" name="subject" placeholder="Assunto" value="<?php echo getOld('subject') ?>">
    <?php echo getFlash('subject') ?>
    <textarea name="message" placeholder="Mensagem"><?php echo getOld('message') ?></textarea>
    <?php echo getFlash('message') ?>
    <button type="submit">Enviar</button>
</form>