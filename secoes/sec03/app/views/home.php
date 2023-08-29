<?php $this->layout('master', ['title' => $title]) ?>
<h2>Users</h2>

<div x-data="users()" x-init="loadUsers()">
    <ul>
        <template x-for="user in data">
            <li x-text="user.firstname"></li>
        </template>
    </ul>
</div>


<ul id="user_home">
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstname ?> | <a href="/user/<?php echo $user->id ?>">Detalhes</a></li>
    <?php endforeach ?>
</ul>

<script src="app.js"></script>