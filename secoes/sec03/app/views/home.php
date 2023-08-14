<h2>Users</h2>

<ul id="user_home">
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstname ?> | <a href="/user/<?php echo $user->id ?>">Detalhes</a></li>
    <?php endforeach ?>
</ul>