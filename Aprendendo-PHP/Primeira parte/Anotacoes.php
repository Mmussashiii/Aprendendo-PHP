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

//file_put_contents() é uma função em PHP que escreve uma string em um arquivo. Ela é usada para criar ou sobrescrever um arquivo com o conteúdo especificado,
// facilitando a gravação de dados em arquivos. Por exemplo, file_put_contents('arquivo.txt', 'Conteúdo do arquivo') criará um arquivo chamado 'arquivo.txt' e
// escreverá a string 'Conteúdo do arquivo' dentro dele. Se o arquivo já existir, ele será sobrescrito com o novo conteúdo. Se o arquivo não existir,
// ele será criado automaticamente. Essa função é útil para salvar dados, como logs, configurações ou qualquer informação que precise ser armazenada em um
// arquivo.

//file_get_contents() é uma função em PHP que lê o conteúdo de um arquivo e retorna como uma string. Ela é usada para obter os dados de um arquivo,
// facilitando a leitura de informações armazenadas em arquivos. Por exemplo, file_get_contents('arquivo.txt') retornará o conteúdo do arquivo 'arquivo.txt'
// como uma string.

//criamos a pasta src para organizar melhor os arquivos do projeto, e dentro dela criamos o arquivo funcoes.php para armazenar as funções que serão usadas
// em nosso projeto, isso ajuda a manter o código mais limpo e organizado, facilitando a manutenção e a reutilização das funções em diferentes partes do
// projeto. até mesmo futuramente por questões de segurança, podemos limitar o acesso a esse arquivo, já que ele não precisa ser acessado diretamente,
// e sim apenas por meio de outros arquivos que o incluam usando require ou include.

// a diferença entre include e require é que o include gera um aviso (warning) se o arquivo não for encontrado, mas o script continua a execução,
// enquanto o require gera um erro fatal e interrompe a execução do script se o arquivo não for encontrado. Isso significa que require é mais rigoroso e
// recomendado quando o arquivo é essencial para o funcionamento do script.

//As declarações include_once e require_once incluem e avaliam o arquivo informado durante a execução do script da mesma forma que include e require,
// mas com uma única diferença: se o código do arquivo já foi incluído, não o fará novamente. Como o nome sugere, o arquivo será incluído somente uma vez.
//Essas instruções podem ser utilizadas nos casos em que o mesmo arquivo pode ser incluído e avaliado mais de uma vez durante uma execução de um script 
//em particular, neste caso, ajudará a evitar problemas como redefinição de funções, reatribuição de valores de variáveis etc.


// o $_POST é uma variável superglobal em PHP que é usada para coletar dados enviados por meio de um formulário HTML usando o método POST.
// Ele é um array associativo que armazena os valores dos campos do formulário, permitindo que você acesse e processe esses dados em seu script PHP.
// Por exemplo, se um formulário tiver um campo de entrada com o nome "nome", você pode acessar o valor enviado usando $_POST['nome'].

// o $_GET é uma variável superglobal em PHP que é usada para coletar dados enviados por meio de um formulário HTML usando o método GET ou para acessar
// parâmetros passados na URL. Ele é um array associativo que armazena os valores dos campos do formulário ou os parâmetros da URL, permitindo que você acesse
// e processe esses dados em seu script PHP. Por exemplo, se um formulário tiver um campo de entrada com o nome "nome" e for enviado usando o método GET,
// você pode acessar o valor enviado usando $_GET['nome']. Da mesma forma, se a URL contiver um parâmetro como ?id=123, você pode acessar o valor do parâmetro
// 'id' usando $_GET['id'].

//header() é uma função em PHP que é usada para enviar cabeçalhos HTTP para o cliente. Ela é comumente usada para redirecionar o usuário para outra página,
// definir o tipo de conteúdo da resposta, ou controlar o cache do navegador. Por exemplo, header('Location: nova-pagina.php') redirecionará o usuário para
// 'nova-pagina.php'. É importante lembrar que a função header() deve ser chamada antes de qualquer saída ser enviada ao navegador, caso contrário, ela não
// funcionará corretamente.


//strict_types é uma diretiva em PHP que, quando habilitada, força a verificação rigorosa dos tipos de dados em tempo de execução.
// Isso significa que, se uma função ou método espera um tipo específico de dado, e um valor de tipo diferente for passado, o PHP irá lançar um erro fatal.
// Isso ajuda a evitar erros de tipo em tempo de execução e torna o código mais seguro e previsível.









































echo "Hello world!";



//git add .
//git commit -m "commit message"
//git push origin main








