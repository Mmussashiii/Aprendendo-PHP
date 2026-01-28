<?php 
// Código aberto em PHP

echo "Streaming aberto.\n por favor insira o nome, o ano e a nota do filme de 0 a 10 nesta ordem. \n";
// Aqui exibimos a abertura do código e as requisições de informações para alimentar nossas váriaveis e apresentar os resultados esperados

$nomeFilme = $argv[1]; //Aqui recebemos a posição de numero 1 do array gerado pelo argv com o imput requisitado pelo echo acima, que no caso é o nome do filme
$anoFilme = $argv[2]; //Aqui recebemos a posição de numero 2, o ano do filme
$notaFilme = $argv[3]; //Aqui a posição de numero 3 que é a nota do filme

$notaFinalFilme = (5.6 + 4 + 10 + 8 + $notaFilme) / 5; // Aqui efetuamos a soma das notas salvas á nova nota inserida pelo usuário e tiramos sua média
$planoPrime = ($anoFilme >= 2000) ? "Sim" : "Não"; // Aqui usamos um if else in line com os operários ? e : para
//  confirmar a presença do filme no plano prime ou não



echo "\n Com a adição da sua descrição conseguimos verificar se ele está incluso no plano prime e também chegamos a uma nota final usando sua avaliação:\n
O nome do filme é: $nomeFilme 
O ano do filme é: $anoFilme
A nota final do filme é: $notaFinalFilme
Incluso no plano prime? : $planoPrime"; // Exibição do nome do filme, seu ano, sua nota final já calculada e se está ou não incluso no plano prime



// Exemplo de estrutura switch case em PHP

switch (expressão) {
   case valor1:
      // código a ser executado se a expressão for igual a valor1
      break;
   case valor2:
      // código a ser executado se a expressão for igual a valor2
      break;
   case valor3:
      // código a ser executado se a expressão for igual a valor3
      break;

   default:
      // código a ser executado se a expressão não for igual a nenhum valor
      break;
}

//A expressão é uma variável ou uma expressão de código que será avaliada. Cada case é uma possível condição que pode ser atendida pela expressão.
//Quando a expressão é igual ao valor especificado em um determinado case, o código correspondente a esse case será executado. A palavra-chave break
//é usada para sair do switch case após a execução do código correspondente.
//O case default é opcional e é executado quando nenhum dos cases especificados é atendido.




// exemplo de uso de match em PHP

$nomeFilme = "Top Gun - Maverick";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor : Ragnarock" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

// no exemplo acima, a variável $genero receberá o valor "Ação" porque $nomeFilme é igual a "Top Gun - Maverick".




//exemplo de uso do operador ternário ?: 

$resultado = $expressao1 ? $expressao2 : $expressao3;

// No exemplo acima, se $expressao1 for verdadeira (true), então $resultado receberá o valor de $expressao2.
// Caso contrário, se $expressao1 for falsa (false), $resultado receberá o valor de $expressao3.


//exemplo de uso de loop for em PHP

for($contador = 1; $contador <= $quantidadeDeNotas; $contador++){
    $somaDeNotas += $argv[$contador];
}

//todo for tem 3 partes principais:
//1. Inicialização: $contador = 1; Aqui, a variável $contador é inicializada com o valor 1.
//2. Condição da repetição: $contador <= $quantidadeDeNotas; Esta é a condição que é verificada antes de cada iteração do loop. Enquanto essa condição for verdadeira, o loop continuará a ser executado.
//3. Incremento: $contador++ Aqui, o valor de $contador é incrementado em 1 após cada iteração do loop.