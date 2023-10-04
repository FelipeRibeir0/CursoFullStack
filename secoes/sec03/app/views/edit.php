<form action="/user/profile/update" method="post"></form>

<hr>
<?php echo getFlash('upload_error') ?>
<?php echo getFlash('upload_success', 'color:green') ?>

<form action="/user/image/update" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/png, image/jpeg, image/gif">
    <button type="submit">Alterar foto</button>
</form>