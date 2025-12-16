CREATE TABLE produtos
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_produto varchar(50) not null,
    preco float not null,
    cor varchar(15) not null,
    validade date not null,
    formato varchar(50) NOT NULL
);