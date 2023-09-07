<?php $this->layout('master', ['title' => $title]) ?>
<h2>Users</h2>

<form action="/" method="get" autocomplete="off">
    <input type="text" name="s" placeholder="Digite o nome que deseja buscar">
    <button type="submit">Buscar</button>
</form>

<ul id="user_home">
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstname ?> | <a href="/user/<?php echo $user->id ?>">Detalhes</a></li>
    <?php endforeach ?>
</ul>

<?php echo $links ?>