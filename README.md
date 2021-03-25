# Desafio para o processo seletivo da NewM

## Daniel Marcos Hermenegildo, danielmarcosh@gmail.com
### https://github.com/danielmarcosh/processo-seletivo-newm

### Sobre mim
 Me chamo Daniel Marcos, atualmente eu estou no 6 periodo de sistemas de informação, no IFMG campus Ouro Branco. Participo de um projeto de pesquisa chamado Ouro Hub que é um Ambiente de desenvolvimento do IFMG - Campus Ouro Branco, onde eu estou desenvolvendo o sistemas para gerenciar e exibir as noticias.

### Sobre o Desafio
Para realizar o desafio, eu utilizei a linguagem PHP, o Framework Laravel e o Banco de dados MySQL, realizei as operações de CRUD, porém ficou complentar alguns requisistos do desafio como a parte de JavaScript, por eu não possuir muito conhecimento no JavaScript no lado do Cliente eu não consegui apesar dos meus esforços completar o desafio, o meu contato com JavaScript sempre foi forte no lado do Servidor.

## Laravel - NewM
### Para rodar o o projeto: 
#### Requisitos:

* Laravel versão 8;
* PHP 7+;
* Composer;
* NPM.

## Banco de Dados
```
CREATE DATABASE newm;

use newm;

CREATE TABLE Cliente (
id INT NOT NULL UNIQUE AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
nascimento DATE NOT NULL,
cpf VARCHAR(11) NOT NULL,
celular VARCHAR(15) NOT NULL,
email VARCHAR(25) NOT NULL,
endereco VARCHAR(80) NOT NULL,
observacao VARCHAR(300),
PRIMARY KEY(id)
);
```

#### Entrar na pasta raiz do projeto "newm" pelo terminal e rodar os seguintes comandos:

- composer install
- copy .env.example .env
- php artisan key:generate

Entrar com os dados do Banco de dados no arquivo .env que fica no diretorio raiz do projeto "newm"
Exemplo:

`
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=newm
- DB_USERNAME=root
- DB_PASSWORD=
`

Ainda dentro do diretorio raiz pelo terminal, rodar os comandos faltantes

- npm install 
- npm run dev
- php artisan serve


### Agradecimentos
Desde já eu agradeço o pessoal da NewM pela oportunidade de participar de seu processo seletivo, com certeza adquiri uma bagagem a mais em minha jornada, muito obrigado também pela educação e transparência em seu processo seletivo.
Estou a disposição para tirar qualquer dúvida, desde já muito obrigado.

Atenciosamente, Daniel Marcos.
