CREATE DATABASE if NOT EXISTS functions;
USE functions;

CREATE TABLE if NOT EXISTS users (
  ID int(9) NOT NULL AUTO_INCREMENT,
  Nome varchar(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (Nome) VALUES
('Felipe'),
('Miro'),
('Alex'),
('Romeu'),
('Julieta'),
('Carlos'),
('Pietra'),
('Thiago'),
('Weslley'),
('Antônio');