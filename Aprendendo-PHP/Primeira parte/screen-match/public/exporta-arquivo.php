<?php

   $filme = [
    "nome" => $_POST['nome'], // A chave 'nome' do array $filme é preenchida com o valor enviado pelo formulário, acessado através de $_POST['nome'].
    "ano" => $_POST['ano'], // A chave 'ano' do array $filme é preenchida com o valor enviado pelo formulário, acessado através de $_POST['ano'].
    "nota" => $_POST['nota'], // A chave 'nota' do array $filme é preenchida com o valor enviado pelo formulário, acessado através de $_POST['nota'].
    "genero" => $_POST['genero'] // A chave 'genero' do array $filme é preenchida com o valor enviado pelo formulário, acessado através de $_POST['genero'].
   ];

file_put_contents('filme.json', json_encode($filme)); // A função json_encode() é usada para converter o array associativo $filme em uma string no formato JSON, e a função file_put_contents() é usada para escrever essa string JSON em um arquivo chamado 'filme.json', permitindo salvar os dados do filme de forma estruturada e acessível para futuras consultas ou compartilhamento.

header('Location: /sucesso.php?filme=' . $filme['nome']); // A função header() é usada para enviar um cabeçalho HTTP que redireciona o usuário para a página 'index.php' após o processamento dos dados do formulário, garantindo uma melhor experiência do usuário e evitando o reenvio dos dados caso a página seja recarregada.


