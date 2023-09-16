<?php $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>

<nav class="navbar navbar-expand-lg bg-custom border-bottom border-body">
    <div class="container-fluid">
        <a class="navbar-brand">Full-Stack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <?php if (!logged()) : ?>
                    <li>
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user/create">Create</a>
                    </li>
                <?php endif ?>
                <li>
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <?php if ($uri === '/') : ?>
                <form class="d-flex" action="/" method="get" autocomplete="off" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquise um usuário" aria-label="Search" name="s">
                    <button class="btn btn-success" type="submit">Pesquisar</button>
                </form>
            <?php endif ?>
        </div>
    </div>

    <div id="status_login">
        <?php
        if (logged()) : ?>
            <span>Olá, </span>
            <span id="helloMessageUser"><?php echo user()->firstname ?></span>
            <span>!</span>
            <a href="/logout" class="link-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
            </a>
            <a href="/user/edit/profile" class="link-success">Edit profile</a>
        <?php else : ?>
            Bem vindo, visitante
        <?php endif ?>
    </div>
</nav>