<?= get('message') ?>
<h1>Página inicial</h1>

<table class="table table-striped-columns table-bordered border-primary">
  <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th colspan="2">Funções</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $users = all('users');
    foreach($users as $user): 
    ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td>
            <a href="?page=edit_user&id=<?= $user->id ?>" class="btn btn-success">Editar</a>
        </td>
        <td>
            <a href="?page=delete_user&id=<?= $user->id ?>" class="btn btn-danger">Deletar</a>
        </td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>