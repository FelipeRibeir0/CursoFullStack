# Clonar o repositório do Github:
Clone o repositório do Github em sua máquina local usando o comando `git clone https://github.com/FelipeRibeir0/cursoFullStack.git`.

1. Instalar o Composer:
Instale o Composer seguindo as instruções do site oficial do Composer: https://getcomposer.org/download/

2. Instalar as dependências:
Após ter o Composer instalado, navegue até a pasta `xampp/htdocs/cursoFullStack` usando o terminal e execute o comando `composer install`. Isso instalará todas as dependências necessárias, incluindo o pacote `vlucas/phpdotenv` que lida com o arquivo .env.

3. Importando o banco de Dados
Se estiver utilizando o XAMPP, após ligar o Apache e o MySQL, vá para `localhost/phpmyadmin`, clique no `Importar` que está na barra de navegação do site e importe o arquivo `createDB.sql`, localizado em `ex25/public/createDB.sql`.