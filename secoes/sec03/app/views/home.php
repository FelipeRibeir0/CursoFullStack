<?php $this->layout('master', ['title' => $title]) ?>
<h2>Users</h2>

<ul id="user_home">
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstname ?> | <a href="/user/<?php echo $user->id ?>">Detalhes</a></li>
    <?php endforeach ?>
</ul>

<?php $this->start('scripts') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/home.js"></script>
<?php $this->stop() ?>
