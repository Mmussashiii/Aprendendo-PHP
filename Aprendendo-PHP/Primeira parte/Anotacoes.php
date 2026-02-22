<?php
/* <? abre código em PHP, ?> fecha código em php.

// comenta linha, # comenta linha e /* inicia bloco de comentário e */ #fecha o mesmo.

// Echo é o comando para executar algo, como console.log

// Qualquer coisa fora da abertura do código de PHP é interpretada como texto e é enviado para a saida, até mesmo quebra de linha após fechar o 
// código, isso polui o output do código podendo até tornar o formato inválido

// Em arquivos somente com o código php é sempre melhor evitar fechar o código

// Php não tem uma função main, ele é executado a partir de arquivos já com o código no qual ele vai ler, Index.php é usado como uma página
// principal, pagina fonte, do qual ao ser executado procura a requisição feita nos arquivos php disponíveis para executar de acordo com o solicitado

// $ é o indicador de variavel

// Float é um numero de ponto flutuante (numeros com casas decimais) e double significa numero de ponto flutuante com precisão dupla.

// Valor boolean é dado como true ou false

// || é um operador de comparação que resulta em um boolean ex: $incluidoNoPlano = $planoPrime || $anoLancamento < 2020; 
// se o ano for menor que 2020 ou ele estiver incluido no plano prime o resultado de $incluidoNoPlano é true, caso não entre em nenhum dos dois casos
// retorna false.

// Seguinto o mesmo exemplo do valor de comparação, temos o E, que é representado por &&, no caso para estar incluso ele teria que cumprir os dois
// cases, $incluidoNoPlano = $planoPrime && $anoLancamento < 2020; retornando true ou false para a variavel dependendo do resultado da comparação

// Se for realizar operações matemáticas em números decimais (como aplicar descontos ou somar valores monetários), não faça isso com float ou double 
// em sistemas reais de produção. Geralmente os cálculos são feitos usando a biblioteca NewDecimal usada para cálculos com numeros decimais por que o
// float e double podem apresentar imprecisão devido à forma como os números de ponto flutuante são representados na memória do computador.


// Aspas simples '' são interpretadas como string e é retornado seu conteudo ao pé da letra, diferente de aspas duplas "" das quais seu conteudo é
// interpretado

// $argv Executa a função de receber os imputs feitos pelo usuário porém ele armazena todos, inclusive o nome do programa que está sendo executado.
// começando no índice 0, ele vai armazenar o nome do arquivo que está sendo executado, e depois, todos os parâmetros que passarmos. e para acessar
// cada índice armazenado usamos $argv [0], $argv [1], $argv [2], e por assim vai.


// Em php é possivel fazer comparação de valores e retornar um resultado com base nisso usando apenas operadores
// condicao ? valor_se_verdadeiro : valor_se_falso
// $PlanoPrime = ($anoFilme >= 2000) ? 'Sim' : 'Não'; no caso a interrogação verifica a condição ($anoFilme >= 2000) e o operador de dois pontos 
//retorna a resposta com base no resultado do condição, se for true retorna o que está sinalizado a direita, se for falso retorna o que está sinalizado
//a esquerda, funciona como um if else basico in line lendo o valor booleano de uma váriavel ou apresentando a condição diretamente na variavel final.



// O match, embora permita criar algo como se fosse um bloco ele não é um bloco e sim uma expressão. Então, depois de avaliada, terá um valor que podemos
// atribuir a uma variável. 

// o switch case, que é uma estrutura de controle de fluxo que permite executar diferentes ações com base no valor de uma expressão. É uma forma mais
// simplificada e legível de escrever vários blocos if/else encadeados, desde que as operações sejam somente de igualdade.


// $argc é uma variável especial em PHP que armazena o número de argumentos passados para um script PHP quando ele é executado a partir da linha de comando.

// var_dump() é uma função em PHP que exibe informações detalhadas sobre uma variável, incluindo seu tipo e valor.
// É frequentemente usada para depuração e análise de dados durante o desenvolvimento de código PHP.

// count() é uma função em PHP que retorna o número de elementos em um array ou a contagem de propriedades em um objeto. 
//É comumente usada para determinar o tamanho de um array ou para verificar se um array está vazio.

// O foreach é uma estrutura de controle de fluxo em PHP que permite iterar sobre os elementos de um array ou objeto de forma mais simples e legível do 
//que um loop for tradicional. Ele é especialmente útil para percorrer arrays associativos, onde você pode acessar tanto a chave quanto o valor de cada
// elemento durante a iteração.

// sum() é uma função em PHP que retorna a soma de todos os valores em um array. Ela é comumente usada para calcular a soma total de elementos numéricos
// em um array, facilitando operações matemáticas e agregações de dados.

//array_sum() é uma função em PHP que retorna a soma dos valores de um array. Ela é usada para calcular a soma total de elementos numéricos em um array,
// facilitando operações matemáticas e agregações de dados. A função array_sum() percorre todos os elementos do array e retorna a soma total, ignorando 
//quaisquer elementos que não sejam numéricos.

// Para criar um array em PHP, você pode usar a função array() ou a sintaxe de colchetes [].

// um array associativo é um tipo de array em PHP onde as chaves são strings em vez de números inteiros. Ele permite armazenar e acessar valores usando
// chaves personalizadas, tornando-o útil para representar dados estruturados, como informações de um usuário, produtos, etc.

// para adicionar um elemento a um array associativo em PHP, você pode usar a sintaxe de colchetes [] para atribuir um valor a uma chave específica. 
//Por exemplo:
// $arrayAssociativo['chave'] = 'valor'; isso adiciona um elemento ao array associativo com a chave 'chave' e o valor 'valor'.
// para acessar um elemento de um array associativo em PHP, você pode usar a chave correspondente entre colchetes []. Por exemplo:
// $valor = $arrayAssociativo['chave']; isso atribui o valor associado à chave 'chave' à variável $valor. 
// Certifique-se de que a chave exista no array para evitar erros de acesso a índices inexistentes.
// para adicionar um novo elemento a um array você pode usar a função array_push() ou a sintaxe de colchetes []. Por exemplo:
// array_push($array, 'novo valor'); ou $array[] = 'novo valor';

// function é a palavra reservada usada para declarar uma função em PHP. Ela é seguida pelo nome da função, parênteses para os parâmetros (se houver) e
// um bloco de código entre chaves {} que define o corpo da função. As funções em PHP são usadas para encapsular um conjunto de instruções que podem ser
// reutilizadas em diferentes partes do código, permitindo a modularização e organização do programa.

// o return é uma palavra reservada em PHP usada dentro de uma função para indicar o valor que a função deve retornar quando for chamada.
// Ele encerra a execução da função e envia o valor especificado de volta para o local onde a função foi chamada. O return é fundamental para
// permitir que as funções forneçam resultados ou informações para outras partes do código, facilitando a reutilização e a modularização do programa.

//após definirmos a função é necessário informar o tipo de valor que ela irá retornar, isso é feito usando a sintaxe 
//function nomeDaFuncao(): tipoDeValor { ... } por exemplo function soma(int $a, int $b): int { return $a + $b; } 
//nesse caso a função soma recebe dois parâmetros do tipo inteiro e retorna um valor do tipo inteiro, que é a soma dos dois parâmetros.
// Especificar o tipo de retorno ajuda a garantir que a função retorne o tipo de dado esperado, melhorando a legibilidade e a segurança do código.

//sort() é uma função em PHP que ordena os elementos de um array em ordem crescente. Ela é usada para organizar os dados de um array de forma ascendente,
//facilitando a busca e a manipulação dos elementos. A função sort() modifica o array original, reordenando seus elementos. 
//Se você quiser manter o array original e obter uma versão ordenada, pode usar a função asort() ou arsort() para ordenar mantendo as chaves associativas.

//min() é uma função em PHP que retorna o menor valor de um array ou de uma lista de argumentos. Ela é usada para encontrar o valor mínimo entre um
// conjunto de números, facilitando a comparação e a análise de dados. A função min() pode ser usada tanto com arrays quanto com uma lista de argumentos
// separados por vírgula. Por exemplo, min(3, 5, 1) retornará 1, enquanto min([3, 5, 1]) também retornará 1.

// o require serve para incluir um arquivo PHP em outro arquivo PHP. Ele é usado para reutilizar código, como funções, classes ou configurações, em diferentes 
//partes de um projeto.
// Quando o require é usado, o PHP tenta incluir o arquivo especificado e, se não conseguir encontrar o arquivo, ele gera um erro fatal e interrompe a execução
// do script. Isso é útil para garantir que o código necessário seja incluído antes de continuar a execução do programa, evitando erros causados por arquivos
// ausentes ou incorretos.

// o __DIR__ é uma constante mágica em PHP que retorna o diretório do arquivo atual. Ele é usado para obter o caminho absoluto do diretório onde o script está
// sendo executado, independentemente do local de onde o script foi chamado. Isso é especialmente útil para garantir que os caminhos dos arquivos sejam corretos
// ao incluir ou requerer arquivos, evitando problemas relacionados a caminhos relativos e facilitando a organização do código em projetos maiores.

// JSON é um formato de dados leve e fácil de ler, usado para transmitir dados entre um servidor e um cliente. Ele é baseado em texto e é amplamente utilizado 
//para representar objetos e estruturas de dados em uma forma que pode ser facilmente interpretada por humanos e máquinas. O JSON é comumente usado em APIs 
//para enviar e receber dados, e em PHP, você pode usar as funções json_encode() e json_decode() para trabalhar com dados JSON.

//json_encode() é uma função em PHP que converte um valor PHP (como um array ou objeto) em uma string JSON. Ela é usada para criar uma representação JSON de dados
// PHP, facilitando a transmissão de dados entre um servidor e um cliente ou para armazenar dados em formato JSON. Por exemplo, json_encode($array) retornará
// uma string JSON representando o conteúdo do array.

//json_decode() é uma função em PHP que converte uma string JSON em um valor PHP (como um array ou objeto). Ela é usada para interpretar dados JSON
// recebidos de um servidor ou para ler dados armazenados em formato JSON, facilitando a manipulação de dados JSON em PHP. Por exemplo,
// json_decode($jsonString, true) retornará um array associativo representando os dados JSON contidos na string $jsonString. O segundo parâmetro,
// quando definido como true, indica que o resultado deve ser um array associativo em vez de um objeto.







echo "Hello world!";



//git add .
//git commit -m "commit message"
//git push origin main








