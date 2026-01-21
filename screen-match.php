<?php

echo "Bem-vindo(a) ao screen match!\n";  // \n código de escape (quebra de linha).

$nomeFilme = "Top Gun - Maverick"; //string
$anoLancamento = $argv[1] ?? "Informe o Ano de lançamento!\n"; //Recebe o primeiro imput do usuário no termial e atribui ele a esta váriavel 
// o uso de ?? quivale a caso o retorno do conteudo a esquerda for null então prevalecera o valor a doreita 
$somaDeNotas = 9; //inteiro
$somaDeNotas += 6; //inteiro
$somaDeNotas += 8; //inteiro
$somaDeNotas += 7.5; //double ou float
$somaDeNotas += 5; //inteiro

$notaFilme = $somaDeNotas / 5; //double ou float
$planoPrime = true; //boolean

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;  //boolean

echo "Nome do filme: " . $nomeFilme . "\n"; // O . é o operador de concatenação, usado para juntar strings
echo "Nota do filme: $notaFilme\n"; // Este segue o exemplo de interpolação, no qual no php é possivel seguir com o uso de aspas e exibir o necessário.
echo "Ano de lançamento do filme: $anoLancamento\n";








echo "5" + "10" . "\n"; // O php soma os numeros mesmo sendo string