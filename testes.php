<?php 
// Código aberto em PHP

echo "Streaming aberto.\n por favor insira o nome, o ano e a nota do filme de 0 a 10 nesta ordem. \n";
// Aqui exibimos a abertura do código e as requisições de informações para alimentar nossas váriaveis e apresentar os resultados esperados

$nomeFilme = $argv[1]; //Aqui recebemos a posição de numero 1 do array gerado pelo argv com o imput requisitado pelo echo acima, que no caso é o nome do filme
$anoFilme = $argv[2]; //Aqui recebemos a posição de numero 2, a nota do filme
$notaFilme = $argv[3]; //Aqui a posição de numero 3 que é o nome do filme

$notaFinalFilme = (5.6 + 4 + 10 + 8 + $notaFilme) / 5; // Aqui efetuamos a soma das notas salvas á nova nota inserida pelo usuário e tiramos sua média
$planoPrime = ($anoFilme >= 2000) ? "Sim" : "Não"; // Aqui usamos um if else in line com os operários ? e : para
//  confirmar a presença do filme no plano prime ou não



echo "\n Com a adição da sua descrição conseguimos verificar se ele está incluso no plano prime e também chegamos a uma nota final usando sua avaliação:\n
O nome do filme é: $nomeFilme 
O ano do filme é: $anoFilme
A nota final do filme é: $notaFinalFilme
Incluso no plano prime? : $planoPrime"; // Exibição do nome do filme, seu ano, sua nota final já calculada e se está ou não incluso no plano prime