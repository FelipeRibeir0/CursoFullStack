CREATE DATABASE IF NOT EXISTS envteste;
USE envteste;

CREATE TABLE teste (
  ID int(11) DEFAULT NULL,
  mensagem varchar(80) NOT NULL,
  tecnologias varchar(10) NOT NULL,
  UNIQUE KEY ID_UNIQUE (ID)
);

INSERT INTO teste (ID, mensagem, tecnologias) VALUES
(1, 'Registra as informações do banco de dados', 'ENV'),
(2, 'Faz a conexão com o banco de dados', 'PDO'),
(3, 'Banco de dados utilizado', 'MYSQL'),
(4, 'Linguagem de programação utilizada', 'PHP');
