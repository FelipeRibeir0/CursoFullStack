<?php $this->layout('master', ['title' => $title]) ?>

<?php echo getFlash('updated_success', 'color:green') ?>
<?php echo getFlash('updated_error') ?>


<form action="/user/<?php echo $user->id ?>" method="post">
    <input type="text" name="firstname" value="<?php echo $user->firstname ?>">
    <?php echo getFlash('firstname') ?>
    <input type="text" name="lastname" value="<?php echo $user->lastname ?>">
    <?php echo getFlash('lastname') ?>
    <input type="email" name="email" value="<?php echo $user->email ?>">
    <?php echo getFlash('email') ?>
    <button type="submit">Atualizar</button>
</form>
<?php if ($user->path) : ?>
    <img src="/<?php echo $user->path; ?>" alt="profile image" class="rounded-circle" width="250" height="240">
<?php endif ?>

<hr>

<?php echo getFlash('password_success', 'color:green') ?>
<?php echo getFlash('password_error') ?>
<form action="/password/user/<?php echo $user->id ?>" method="post">

    <?php echo getCsrf() ?>
    <input type="text" name="password">
    <?php echo getFlash('password') ?>
    <input type="text" name="password_confirmation">
    <?php echo getFlash('password_confirmation') ?>
    <button type="submit">Atualizar</button>
</form>

<hr>

<?php echo getFlash('upload_error') ?>
<?php echo getFlash('upload_success', 'color:green') ?>

<form action="/user/image/update" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/png, image/jpeg, image/gif">
    <button type="submit">Alterar foto</button>
</form>