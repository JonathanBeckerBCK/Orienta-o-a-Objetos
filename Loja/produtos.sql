CREATE TABLE produtos
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_produto varchar(50) not null,
    preco float not null,
    cor varchar(15) not null,
    validade date not null,
    formato varchar(50) NOT NULL
);