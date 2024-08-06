<?php

$conectar = new PDO("mysql:dbname=projeto x;host=localhost", "root","");

$sql = $conectar -> query('SELECT * FROM aluno');

$dados = $sql -> fetchALL( PDO::FETCH_ASSOC );

echo '<pre/>';
print_r($dados);

?>



/*
ABAIXO EXPLICAÇÃO SOBRE ESSA CONEXÃO AO BANCO DE DADOS:


Conectando ao Banco de Dados

PDO - Existem algumas formas, mas a mais utilizadas é usando a biblioteca PDO 

PDO - é uma classe que vamos instanciar, gerando um objeto, e passar dentro do parâmetro informações sobre o banco de dados que queremos conectar:

$pdo = new PDO("mysql:dbname=NomedoMeuDB;host=localhost", "root","");

1º $pdo - pode ser qualquer nome para esssa variável

2º ("mysql:") - informo qual o banco de dados utilizado que estou conectando

3 º dbname=NomedoMeuDB; - informo o nome que dei para o meu Banco de Dados na sua criação

4º host=localhost" - informo qual o tipo de conexão, nesse caso inseri que é por localhost, mas dependendo do caso poderia colocar o ip da minha maquina 127.0.0.1

5º "root", - informo o login do meu Banco de Dados(informado na instalação na maquina)

6"" - informo a senha do meu Banco de Dados(informado na instalação na maquina) nesse caso não possuo senha para entrar então deixo vazio


Banco de Dados conectado !!

caso não de nenhum erro, a conexão foi efeituada com sucesso, ou possivelmente pode aparecer o erro apenas ao consultar algum dado do DB, todavia é possível fazer um try cach tratamento de exceção.


Banco de Dados conectado agora vamos fazer algumas consultas ao nosso DB:

query() - utilizado para fazer consulta ao DB, existem varias formas de consultar, uma delas é utilizando um método chamado query.

query(aqui do o comando que eu quiser, seja para consultar, inserir, atualizar, deletar..)


$sql = $conectar -> query();

então aqui estou utilizando o $conectar, e estou usando nele mesmo o método query

$sql = $conectar -> query('SELECT * FROM aluno'); <-comando para pegar os dados 

agora comando para printar na tela:

$dados = $sql -> fetchALL();

fetchALL - quer dizer fetch-pegue os dados, ALL-todos

$dados = $sql -> fetchALL();

echo "<pre/>";

print_r ($dados);


deu certo! mas percebe que ta puxando os dados duplicados, para corrigir isso temos que passar uma associação dentro do fetchALL: PDO::FETCH_ASSOC <- uma constante estática do PDO

Isso vai impedir de os dados virem duplicados:

$dados = $sql -> fetchALL( PDO::FETCH_ASSOC );



*/