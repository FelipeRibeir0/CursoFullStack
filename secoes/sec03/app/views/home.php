<?php $this->layout('master', ['title' => $title]) ?>
<h2>Users</h2>

<ul id="user_home">
    <?php foreach ($users->rows as $user) : ?>
        <li><?php echo $user->firstname ?> | <a href="/user/<?php echo $user->id ?>" class="link-primary link-underline-opacity-50 link-underline-opacity-100-hover">Detalhes</a></li>
    <?php endforeach ?>
</ul>

<?php echo $links ?>