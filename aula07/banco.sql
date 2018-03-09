







create table posts(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,usuario_id INT NOT NULL,post VARCHAR(140) NOT NULL,FOREIGN KEY (usuario_id) REFERENCES usuarios(id));

CREATE TABLE usuarios( id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(255) NOT NULL, senha VARCHAR(40) NOT NULL, PRIMARY KEY(id) );


INSERT INTO usuarios (usuario,senha) VALUES ('lucas','123')










 INSERT INTO posts (usuario_id,posts) VALUES (1,"Meu Primeiro Post");
