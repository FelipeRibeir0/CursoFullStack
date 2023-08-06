<?= get('message') ?>

<?php 

$user = find('users','id',$_GET['id']);
?>
<div class="row justify-content-center">
    <div class="col-lg-9">
        <h1>Editar dados</h1>
        <form action="pages/forms/update_user.php" method="post" role="form" autocomplete="off">
            <div class="row g-1">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Digite o seu nome" name="name" value="<?php echo $user->name?>">
                    <label for="floatingName">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingLastName" placeholder="Digite o seu sobrenome" name="lastname" value="<?php echo $user->lastname?>">
                    <label for="floatingLastName">Sobrenome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email" value="<?php echo $user->email?>">
                    <label for="floatingEmail">Email</label>
                </div>
                <input type="hidden" name="id" value="<?=$user->id?>">
            </div>
            <div class="btnEnviar mb-3">
                <button type="submit" class="btn btn-primary w-100 fw-bold">Atualizar</button>
            </div>
    </div>
    </form>
</div>
</div>