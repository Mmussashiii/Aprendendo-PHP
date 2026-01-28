<?php
/* <? abre código em PHP, ?> fecha código em php.

// comenta linha, # comenta linha e /* inicia bloco de comentário e */ #fecha o mesmo.

// Echo é o comando para executar algo, como console.log

// Qualquer coisa fora da abertura do código de PHP é interpretada como texto e é enviado para a saida, até mesmo quebra de linha após fechar o 
// código, isso polui o output do código podendo até tornar o formato inválido

// Em arquivos somente com o código php é sempre melhor evitar fechar o código com 

// Php não tem uma função main, ele é executado a partir de arquivos já com o código no qual ele vai ler, Index.php é usado como uma página
// principal, pagina fonte, do qual ao ser executado procura a requisição feita nos arquivos php disponíveis para executar de acordo com o solicitado

// $ é o indicador de variavel

// Float é um numero de ponto flutuante (numeros com casas decimais) e double significa numero de ponto flutuante com precisão dupla.

// Valor boolean é dado como true ou false

// || Operador de comparação que resulta em um boolean ex: $incluidoNoPlano = $planoPrime || $anoLancamento < 2020; 
// se o ano for menor que 2020 ou ele estiver incluido no plano prime o resultado de $incluidoNoPlano é true, caso não entre em nenhum dos dois casos
// retorna false.

// Seguinto o mesmo exemplo do valor de comparação, temos o E, que é representado por &&, no caso para estar incluso ele teria que cumprir os dois
// cases, $incluidoNoPlano = $planoPrime && $anoLancamento < 2020; retornando true ou false á variavel dependendo do resultado da comparação

// Se for realizar operações matemáticas em números decimais (como aplicar descontos ou somar valores monetários), não faça isso com float ou double 
// em sistemas reais de produção. Geralmente os cálculos são feitos usando a biblioteca NewDecimal usada para cálculos com numeros decimais

// Aspas simples '' são interpretadas como string e é retornado seu conteudo ao pé da letra, diferente de aspas duplas "" das quais seu conteudo é interpretado

// $argv Executa a função de receber os inputs feitos pelo usuário porém ele armazena todos, inclusive o nome do programa que está sendo executado.
// começando no índice 0, ele vai armazenar o nome do arquivo que está sendo executado, e depois, todos os parâmetros que passarmos. e para acessar cada índice
// armazenado usamos $argv [0], $argv [1], $argv [2], e por assim vai.

// Em php é possivel fazer comparação de valores e retornar um resultado com base nisso usando apenas operadores condicao ? valor_se_verdadeiro : valor_se_falso
// $textoPrime = ($anoFilme >= 2000) ? 'Sim' : 'Não'; no caso a interrogação verifica a condição ($anoFilme >= 2000) e o operador de dois pontos retorna a resposta
// com base no resultado do condição, se for true retorna o que está sinalizado a direita, se for falso retorna o que está sinalizado a esquerda,
// funciona como um if else basico in line lendo o valor booleano de uma váriavel ou apresentando a condição diretamente na variavel final.

// O match, embora permita criar algo como se fosse um bloco ele não é um bloco e sim uma expressão. Então, depois de avaliada, terá um valor que podemos atribuir a uma variável. 

// o switch case, que é uma estrutura de controle de fluxo que permite executar diferentes ações com base no valor de uma expressão. É uma forma mais simplificada e legível de escrever vários blocos if/else encadeados, desde que as operações sejam somente de igualdade.

// $argc é uma variável especial em PHP que armazena o número de argumentos passados para um script PHP quando ele é executado a partir da linha de comando.

echo "Hello world!";












