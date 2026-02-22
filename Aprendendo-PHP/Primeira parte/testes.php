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

switch ($nomeFilme) { // A expressão dentro do switch é avaliada e comparada com os valores definidos em cada case. O código correspondente ao case que corresponde à expressão será executado.
    case "Top Gun - Maverick": // Se a expressão for igual a "Top Gun - Maverick", o código dentro deste case será executado.
        echo "\nO gênero do filme é: Ação\n";
        break; // O break é usado para sair do switch case após a execução do código correspondente ao case.
    case "Thor : Ragnarock": // Se a expressão for igual a "Thor : Ragnarock", o código dentro deste case será executado.
        echo "\nO gênero do filme é: Super-herói\n";
        break; // O break é usado para sair do switch case após a execução do código correspondente ao case.
    case "Se beber não case": // Se a expressão for igual a "Se beber não case", o código dentro deste case será executado.
        echo "\nO gênero do filme é: Comédia\n";
        break; // O break é usado para sair do switch case após a execução do código correspondente ao case.
    default: // O case default é opcional e é executado quando nenhum dos cases especificados é atendido. Neste caso, se o nome do filme não corresponder a nenhum dos cases anteriores, este bloco de código será executado.
        echo "\nGênero desconhecido\n";
        break; // O break é usado para sair do switch case após a execução do código correspondente ao default.
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

//exemplo de uso de loop while em PHP

$contador = 1;
while ($contador <= $quantidadeDeNotas) {
    $somaDeNotas += $argv[$contador];
    $contador++;
}

// No exemplo acima, o loop while continuará a executar enquanto a condição $contador <= $quantidadeDeNotas for verdadeira.
// Dentro do loop, a soma das notas é atualizada e o contador é incrementado em 1 a cada iteração.




//Exiba uma mensagem informando se o filme é lançamento ou não, dependendo do ano.

if ($anoFilme > 2022) {
    echo "\nEste filme é Lançamento!\n";
} else {
    echo "\nEste filme não é Lançamento!\n";
}

//Crie uma variável a partir de uma expressão condicional definindo o gênero do filme a partir de seu nome.

$genero = match ($nomeFilme){
    "Top Gun - Maverick" => "Ação",
    "Thor : Ragnarock" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};


//Faça um loop nas notas recebidas pela linha de comando para somá-las e depois calcular a média.

$quantidadeDeNotas = $argc - 1;// Aqui calculamos a quantidade de notas recebidas subtraindo 1 do total de argumentos (argc) para desconsiderar o nome do arquivo
for($contador = 1; $contador <= $quantidadeDeNotas; $contador++){// Loop para percorrer todas as notas recebidas
    $somaDeNotas += $argv[$contador];// Somamos cada nota ao total armazenado em $somaDeNotas
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;// Calculamos a média dividindo a soma total das notas pela quantidade de notas

echo "\nA nota final do filme é: $notaFilme\n";


//1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

for ($i = 0; $i <= 100; $i++) {// Loop de 0 a 100
    if ($i % 2 != 0) {// Verifica se o número é ímpar usando o operador módulo (%)
        echo "$i\n";// Exibe o número ímpar na tela
    }
}

//2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = $argv[1];// Recebe altura e peso como argumentos da linha de comando
$peso = $argv[2];
$imc = $peso / ($altura * $altura);// Fórmula do IMC: peso (kg) dividido pela altura (m) ao quadrado
echo "Seu IMC é: $imc\n";

//3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).

$hora = date("H"); // Função date com o parâmetro "H" retorna a hora atual no formato de 24 horas (00 a 23)
if ($hora < 12) { // Condicional para verificar o período do dia
    echo "Bom dia!\n";
} elseif ($hora < 18) {// Se a hora for menor que 18 (6 PM), é tarde
    echo "Boa tarde!\n";
} else {
    echo "Boa noite!\n";
};
//Crie um array associativo para armazenar as informações de um filme (nome, ano, nota, gênero) e exiba essas informações na tela.

$filme = [ // abrimos nosso array associativo com colchetes [] e dentro dele definimos as chaves e os valores associados a cada chave usando o operador =>.
    "nome" => "Thor: Ragnarok", // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nome" é a chave e "Thor: Ragnarok" é o valor associado a essa chave.
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

echo $filme["nome"] . "\n"; // Para acessar os valores de um array associativo, usamos a chave correspondente entre colchetes. Neste caso, $filme["nome"] retorna o valor associado à chave "nome", que é "Thor: Ragnarok".


// O vardump() é uma função em PHP que exibe informações detalhadas sobre uma variável, incluindo seu tipo e valor. É frequentemente usada para depuração e análise de dados durante o desenvolvimento de código PHP.

//crie um array que receba numeros e com um loop for adicione os numeros de 0 a 4 nesse array, depois use o var_dump() para exibir as informações do array criado.

$numeros = [$argv]; // Aqui criamos um array chamado $numeros e atribuímos a ele o valor de $argv, que é um array especial em PHP que contém os argumentos passados para o script a partir da linha de comando.
for ($i = 0; $i < 5; $i++) { // Loop de 0 a 4
    $numeros[] = $i; // Adiciona o número atual ao array usando a sintaxe de colchetes []
}
var_dump($numeros); // Exibe informações detalhadas sobre o array $numeros, incluindo seu tipo e valor

// O count() é uma função em PHP que retorna o número de elementos em um array ou a contagem de propriedades em um objeto. É comumente usada para determinar o tamanho de um array ou para verificar se um array está vazio.

//por exemplo:

$frutas = ["maçã", "banana", "laranja"]; // Criamos um array de frutas
echo "Número de frutas: " . count($frutas) . "\n"; // Usamos a função count() para contar o número de elementos no array $frutas e exibimos o resultado na tela

//ela pode também ser usada para verificar se um array está vazio, retornando 0 se não houver elementos:

$frutas = []; // Criamos um array vazio
if (count($frutas) === 0) { // Verificamos se o array está vazio usando count()
    echo "O array de frutas está vazio.\n"; // Exibimos uma mensagem indicando que o array está vazio
} else {
    echo "O array de frutas contém " . count($frutas) . " frutas.\n"; // Se o array não estiver vazio, exibimos o número de frutas
}

//O foreach é uma estrutura de controle de fluxo em PHP que permite iterar sobre os elementos de um array ou objeto de forma mais simples e legível do que um loop for tradicional. Ele é especialmente útil para percorrer arrays associativos, onde você pode acessar tanto a chave quanto o valor de cada elemento durante a iteração.

//por exemplo:

$filme = [ // Criamos um array associativo para armazenar as informações de um filme
    "nome" => "Thor: Ragnarok", // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nome" é a chave e "Thor: Ragnarok" é o valor associado a essa chave.
    "ano" => 2021,// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "ano" é a chave e 2021 é o valor associado a essa chave.
    "nota" => 7.8,// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nota" é a chave e 7.8 é o valor associado a essa chave.
    "genero" => "super-herói"// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "genero" é a chave e "super-herói" é o valor associado a essa chave.
];

foreach ($filme as $chave => $valor) { // Usamos o foreach para iterar sobre o array associativo $filme. A variável $chave recebe a chave de cada elemento e a variável $valor recebe o valor correspondente.
    echo "$chave: $valor\n"; // Exibe a chave e o valor de cada elemento do array
}

//sum() é uma função em PHP que retorna a soma de todos os valores em um array. Ela é comumente usada para calcular a soma total de elementos numéricos em um array, facilitando operações matemáticas e agregações de dados.

//por exemplo:

$numeros = [1, 2, 3, 4, 5]; // Criamos um array de números
$soma = array_sum($numeros); // Usamos a função array_sum() para calcular a soma total dos elementos do array $numeros e armazenamos o resultado na variável $soma
echo "A soma dos números é: $soma\n"; // Exibimos a soma dos números na tela

//array_sum() é uma função em PHP que retorna a soma dos valores de um array. Ela é usada para calcular a soma total de elementos numéricos em um array, facilitando operações matemáticas e agregações de dados. A função array_sum() percorre todos os elementos do array e retorna a soma total, ignorando quaisquer elementos que não sejam numéricos.

//por exemplo:

$valores = [10, 20, 30, "texto", 40]; // Criamos um array com valores numéricos e um valor de texto
$soma = array_sum($valores); // Usamos a função array_sum() para calcular a soma total dos elementos do array $valores. A função irá ignorar o valor "texto" e somar apenas os valores numéricos.
echo "A soma dos valores é: $soma\n"; // Exibimos a soma dos valores na tela, que será 100 (10 + 20 + 30 + 40) ignorando o valor "texto".

//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$numeros = [1, 2, 2, 3, 4, 4, 5]; // Criamos um array com elementos duplicados

foreach ($numeros as $numero) { // Usamos o foreach para iterar sobre o array $numeros
    if (!in_array($numero, $numerosUnicos)) { // Verificamos se o número atual não está presente no array $numerosUnicos usando a função in_array()
        $numerosUnicos[] = $numero; // Se o número não estiver presente, adicionamos ao array $numerosUnicos usando a sintaxe de colchetes []
    }
}
echo "Array sem duplicados: ";
foreach ($numerosUnicos as $numero) { // Usamos outro foreach para iterar sobre o array $numerosUnicos e exibir os números únicos na tela
    echo "$numero ";// Exibe cada número único na tela
}
echo "\n";

//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

$notas = [7.5, 8.0, 6.0, 9.0]; // Criamos um array de notas
$media = array_sum($notas) / count($notas); // Calculamos a média das notas usando array_sum() para somar os valores e count() para contar o número de elementos no array
echo "A média do aluno é: $media\n"; // Exibimos a média do aluno na tela

foreach ($notas as $nota) {// Usamos o foreach para iterar sobre o array de notas
    if ($nota >= 6.0) {// Verificamos se a nota é maior ou igual a 6.0 para determinar se o aluno foi aprovado
        echo "Nota: $nota - Aprovado\n";// Se a nota for maior ou igual a 6.0, exibimos que o aluno foi aprovado
    } else {
        echo "Nota: $nota - Reprovado\n";// Se a nota for menor que 6.0, exibimos que o aluno foi reprovado
    }
}

//3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [ // Criamos um array associativo para representar uma conta bancária
    "titular" => "João Silva", // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "titular" é a chave e "João Silva" é o valor associado a essa chave.
    "saldo" => 1500.75 // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "saldo" é a chave e 1500.75 é o valor associado a essa chave.
];

foreach ($contaBancaria as $chave => $valor) {// Usamos o foreach para iterar sobre o array associativo $contaBancaria. A variável $chave recebe a chave de cada elemento e a variável $valor recebe o valor correspondente.
    echo "$chave: $valor\n"; // Exibe a chave e o valor de cada elemento do array
}

//4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$familiares = ["Maria", "José", "Ana"]; // Criamos um array com nomes de familiares
$familiares[] = "Carlos"; // Adicionamos mais um elemento ao array usando a sintaxe de colchetes []
$familiares[] = "Sofia"; // Adicionamos mais um elemento ao array usando a sintaxe de colchetes []
echo "Nomes dos familiares: ";
foreach ($familiares as $familiar) { // Usamos o foreach para iterar sobre o array $familiares e exibir os nomes na tela
    echo "$familiar "; // Exibe o nome de cada familiar na tela
}

// Crie uma função que exibe uma mensagem informando se um filme é lançamento ou não;

function exibeMensagemLancamento (int $ano): void { // Função para exibir a mensagem de lançamento do filme, recebendo o ano como parâmetro.
    if ($ano > 2022) { // Verifica se o ano é maior que 2022, indicando que o filme é um lançamento.
        echo "Este filme é Lançamento!\n";
    } elseif ($ano >= 2020 && $ano <= 2022) {// Verifica se o ano está entre 2020 e 2022, indicando que o filme é recente.
        echo "Este filme é Recente!\n";
    } else {
        echo "Este filme é Clássico!\n";// Se o ano for menor que 2020, exibimos que o filme é clássico
    }
}

//Crie a função responsável por determinar se um filme está ou não incluído no plano;

function filmeIncluidoNoPlano (bool $incluidoNoPlano): bool {// Função para exibir se o filme está incluído no plano, recebendo um valor booleano como parâmetro.
    if ($incluidoNoPlano) {// Verifica se o valor booleano é verdadeiro, indicando que o filme está incluído no plano.
        echo "Este filme está incluído no plano!\n";
        return true; // Retorna true para indicar que o filme está incluído no plano
    } else {// Se o valor booleano for falso, exibimos que o filme não está incluído no plano
        echo "Este filme não está incluído no plano!\n";
        return false;// Retorna false para indicar que o filme não está incluído no plano
    }
}

//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function numeroInteligente (int $num1, int $num2, string $operacao): int { // Função para realizar uma operação matemática entre dois números inteiros, recebendo os números e a operação como parâmetros, e retornando um valor inteiro.
    switch ($operacao) { // Usamos um switch case para determinar qual operação matemática será realizada com base na string de operação fornecida.
        case "soma": // Se a operação for "soma", realizamos a soma dos dois números
            return $num1 + $num2;
        case "subtracao": // Se a operação for "subtracao", realizamos a subtração dos dois números
            return $num1 - $num2;
        case "multiplicacao": // Se a operação for "multiplicacao", realizamos a multiplicação dos dois números
            return $num1 * $num2;
        case "divisao": // Se a operação for "divisao", realizamos a divisão dos dois números
            if ($num2 != 0) { // Verificamos se o segundo número é diferente de zero para evitar divisão por zero
                return $num1 / $num2;
            } else {
                echo "Erro: Divisão por zero não é permitida.\n";
                return 0; // Retorna 0 ou algum valor específico para indicar erro de divisão por zero
            }
        default: // Se a operação não corresponder a nenhum dos casos anteriores, exibimos uma mensagem de erro
            echo "Operação inválida. Por favor, escolha entre soma, subtracao, multiplicacao ou divisao.\n";
            return 0; // Retorna 0 ou algum valor específico para indicar operação inválida
    }
}

//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro e exiba a classificação do IMC.

function calcularIMC (float $peso, float $altura): float { // Função para calcular o IMC, recebendo peso e altura como parâmetros e retornando um valor float.
    if ($altura > 0) { // Verificamos se a altura é maior que zero para evitar divisão por zero
        return $peso / ($altura * $altura); // Calculamos o IMC usando a fórmula: peso / (altura * altura)
    } else {
        echo "Erro: Altura inválida. Por favor, informe uma altura maior que zero.\n";
        return 0; // Retorna 0 ou algum valor específico para indicar erro de altura inválida
    }
}

function exibirClassificacaoIMC (float $imc): void { // Função para exibir a classificação do IMC, recebendo o valor do IMC como parâmetro e sem retorno (void).
    if ($imc < 18.5) { // Se o IMC for menor que 18.5, exibimos que está abaixo do peso
        echo "Classificação: Abaixo do peso.\n";
    } elseif ($imc >= 18.5 && $imc < 25) { // Se o IMC estiver entre 18.5 e 24.9, exibimos que está no peso normal
        echo "Classificação: Peso normal.\n";
    } elseif ($imc >= 25 && $imc < 30) { // Se o IMC estiver entre 25 e 29.9, exibimos que está com sobrepeso
        echo "Classificação: Sobrepeso.\n";
    } else { // Se o IMC for maior ou igual a 30, exibimos que está obeso
        echo "Classificação: Obesidade.\n";
    }
}
calcularIMC(peso: $argv[1], altura: $argv[2]); // Chamamos a função calcularIMC passando os valores de peso e altura recebidos como argumentos da linha de comando.
exibirClassificacaoIMC(calcularIMC(peso: $argv[1], altura: $argv[2])); // Chamamos a função exibirClassificacaoIMC passando o resultado da função calcularIMC para exibir a classificação do IMC.

//crie uma função em php para converter graus Celsius para Fahrenheit

function celsiusParaFahrenheit (float $celsius): float { // Função para converter graus Celsius para Fahrenheit, recebendo a temperatura em Celsius como parâmetro e retornando a temperatura em Fahrenheit como um valor float.
    return ($celsius * 9/5) + 32; // Fórmula de conversão: (Celsius * 9/5) + 32
}
celsiusParaFahrenheit(celsius: $argv[1]); // Chamamos a função celsiusParaFahrenheit passando o valor de Celsius recebido como argumento da linha de comando para realizar a conversão e obter a temperatura em Fahrenheit.


//Recupere a menor nota de array de notas de um filme. Dica: Você pode usar as funções sort e min

function menorNota (array $notas): float { // Função para recuperar a menor nota de um array de notas, recebendo um array de notas como parâmetro e retornando a menor nota como um valor float.
    sort($notas); // Usamos a função sort() para ordenar as notas em ordem crescente
    return min($notas); // Usamos a função min() para retornar a menor nota do array ordenado
}
menorNota($argv); // Chamamos a função menorNota passando o array de notas recebido como argumento da linha de comando para obter a menor nota do filme.

//Recupere, a partir do nome de um filme, a parte da string até o caractere :;

function recuperarParteStringAteDoisPontos(string $nomeFilme): string { // Função para recuperar a parte da string até o caractere :, recebendo o nome do filme como parâmetro e retornando a parte da string como uma string.
    $posicaoDoisPontos = strpos($nomeFilme, ":" ); // Usamos a função strpos() para encontrar a posição do caractere : no nome do filme
    if ($posicaoDoisPontos !== false) { // Se o caractere : for encontrado (não for false)
        return substr($nomeFilme, 0, $posicaoDoisPontos); // Usamos a função substr() para retornar a parte da string até o caractere :
    } else {
        return $nomeFilme; // Se o caractere : não for encontrado, retornamos o nome do filme completo
    }
}
recuperarParteStringAteDoisPontos($argv[1]); // Chamamos a função recuperarParteStringAteDoisPontos passando o nome do filme recebido como argumento da linha de comando para obter a parte da string até o caractere :.

//Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

function exibirTresMaioresNotas (array $notas): array { // Função para exibir as 3 maiores notas de um array, recebendo um array de notas como parâmetro e retornando um array com as 3 maiores notas.
    rsort($notas); // Usamos a função rsort() para ordenar as notas em ordem decrescente
    return array_slice($notas, 0, 3); // Usamos a função array_slice() para retornar as 3 maiores notas do array ordenado
}
exibirTresMaioresNotas($argv); // Chamamos a função exibirTresMaioresNotas passando o array de notas recebido como argumento da linha de comando para obter as 3 maiores notas do filme.

//Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

function transformarStringEmArray (string $dados): array { // Função para transformar uma string em um array, recebendo a string como parâmetro e retornando um array com os itens separados por vírgulas.
    return explode(",", $dados); // Usamos a função explode() para dividir a string em um array, usando a vírgula como delimitador
}
transformarStringEmArray("Vinicius Dias,1997,Programador"); // Chamamos a função transformarStringEmArray passando a string "Vinicius Dias,1997,Programador" para obter um array com os itens separados por vírgulas.

//Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordenarArrayStrings(array $strings): array { // Função para ordenar um array de strings em ordem alfabética, recebendo um array de strings como parâmetro e retornando o array ordenado.
    sort($strings); // Usamos a função sort() para ordenar o array em ordem alfabética
    return $strings; // Retornamos o array ordenado
}
ordenarArrayStrings(["banana", "maçã", "laranja"]); // Chamamos a função ordenarArrayStrings passando um array de strings para obter o array ordenado em ordem alfabética.

//Transforme o array associativo $filme em um JSON e escreva o resultado em um arquivo;

$filmeArray = [ // Criamos um array associativo para armazenar as informações de um filme
    "nome" => "Thor: Ragnarok", // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nome" é a chave e "Thor: Ragnarok" é o valor associado a essa chave.
    "ano" => 2021,// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "ano" é a chave e 2021 é o valor associado a essa chave.
    "nota" => 7.8,// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nota" é a chave e 7.8 é o valor associado a essa chave.
    "genero" => "super-herói"// O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "genero" é a chave e "super-herói" é o valor associado a essa chave.
];
function escreverFilmeEmArquivo(array $filme, string $caminhoArquivo): void { // Função para escrever o array associativo $filme em um arquivo JSON, recebendo o array de filme e o caminho do arquivo como parâmetros.
    $json = json_encode($filme); // Usamos a função json_encode() para converter o array associativo $filme em uma string JSON
    file_put_contents($caminhoArquivo, $json); // Usamos a função file_put_contents() para escrever a string JSON no arquivo especificado pelo caminho $caminhoArquivo
}
escreverFilmeEmArquivo($filmeArray, __DIR__ . "/filme.json");// Chamamos a função escreverFilmeEmArquivo passando o array associativo $filmeArray e o caminho do arquivo "filme.json" para escrever os dados do filme em um arquivo JSON.

// agora leia o conteúdo em JSON e transforme-o em um array associativo no PHP.

$caminhoArquivo = __DIR__ . "/filme.json"; // Definimos o caminho do arquivo JSON usando a constante __DIR__ para obter o diretório atual e concatenando com o nome do arquivo "filme.json"
function lerFilmeDeArquivo(string $caminhoArquivo): array { // Função para ler o conteúdo de um arquivo JSON e transformá-lo em um array associativo, recebendo o caminho do arquivo como parâmetro e retornando o array associativo.
    $json = file_get_contents($caminhoArquivo); // Usamos a função file_get_contents() para ler o conteúdo do arquivo JSON especificado pelo caminho $caminhoArquivo e armazenamos a string JSON na variável $json
    return json_decode($json, true); // Usamos a função json_decode() para converter a string JSON de volta para um array associativo, passando true como segundo parâmetro para obter um array associativo em vez de um objeto
}

// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$caminhoArquivoTeste = __DIR__ . "/teste.txt"; // Definimos o caminho do arquivo teste.txt usando a constante __DIR__ para obter o diretório atual e concatenando com o nome do arquivo "teste.txt"
function lerPrimeiraLinhaArquivo(string $caminhoArquivo): string { // Função para ler a primeira linha de um arquivo, recebendo o caminho do arquivo como parâmetro e retornando a primeira linha como uma string.
    $arquivo = fopen($caminhoArquivo, "r"); // Usamos a função fopen() para abrir o arquivo especificado pelo caminho $caminhoArquivo em modo de leitura ("r") e armazenamos o recurso do arquivo na variável $arquivo
    if ($arquivo) { // Verificamos se o arquivo foi aberto com sucesso
        $primeiraLinha = fgets($arquivo); // Usamos a função fgets() para ler a primeira linha do arquivo e armazenamos na variável $primeiraLinha
        fclose($arquivo); // Usamos a função fclose() para fechar o arquivo após a leitura
        return $primeiraLinha; // Retornamos a primeira linha lida do arquivo
    } else {
        echo "Erro ao abrir o arquivo.\n"; // Se o arquivo não puder ser aberto, exibimos uma mensagem de erro
        return ""; // Retornamos uma string vazia para indicar que houve um erro na abertura do arquivo
    }
}
lerPrimeiraLinhaArquivo($caminhoArquivoTeste); // Chamamos a função lerPrimeiraLinhaArquivo passando o caminho do arquivo teste.txt para ler a primeira linha do arquivo e obter seu conteúdo.

//Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$caminhoArquivo = __DIR__ . "teste.txt";

function acrescentarFraseNoArquivo(string $caminhoArquivo, string $frase): void { // Função para acrescentar uma frase no final de um arquivo, recebendo o caminho do arquivo e a frase como parâmetros.
    $arquivo = fopen($caminhoArquivo, "a"); // Usamos a função fopen() para abrir o arquivo especificado pelo caminho $caminhoArquivo em modo de escrita ("a" para append) e armazenamos o recurso do arquivo na variável $arquivo
    if ($arquivo) { // Verificamos se o arquivo foi aberto com sucesso
        fwrite($arquivo, $frase . "\n"); // Usamos a função fwrite() para escrever a frase no final do arquivo, adicionando uma nova linha após a frase
        fclose($arquivo); // Usamos a função fclose() para fechar o arquivo após a escrita
    } else {
        echo "Erro ao abrir o arquivo.\n"; // Se o arquivo não puder ser aberto, exibimos uma mensagem de erro
    }
}
acrescentarFraseNoArquivo($caminhoArquivo, "PHP é incrível!"); // Chamamos a função acrescentarFraseNoArquivo passando o caminho do arquivo teste.txt e a frase "PHP é incrível!" para acrescentar essa frase no final do arquivo.

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}'; // Definimos a string JSON que representa um objeto com as informações de nome, ano de nascimento e profissão
function converterJsonEmObjeto(string $json): object { // Função para converter uma string JSON em um objeto, recebendo a string JSON como parâmetro e retornando o objeto resultante.
    return json_decode($json); // Usamos a função json_decode() para converter a string JSON em um objeto PHP
}
$objeto = converterJsonEmObjeto($stringJson); // Chamamos a função converterJsonEmObjeto passando a string JSON para converter em um objeto PHP
var_dump($objeto); // Exibimos o objeto resultante usando var_dump() para verificar seu conteúdo e tipo.

//Escreva uma função responsável por criar um filme com todos os valores necessários e exibir as informações desse filme na tela.

function criarFilme(string $nome, int $ano, float $nota, string $genero): void { // Função para criar um filme com os valores fornecidos e exibir suas informações na tela, recebendo o nome, ano, nota e gênero como parâmetros.
    $filme = [ // Criamos um array associativo para representar o filme
        "nome" => $nome, // O operador => é usado para associar o valor do parâmetro $nome à chave "nome" no array associativo
        "ano" => $ano, // O operador => é usado para associar o valor do parâmetro $ano à chave "ano" no array associativo
        "nota" => $nota, // O operador => é usado para associar o valor do parâmetro $nota à chave "nota" no array associativo
        "genero" => $genero // O operador => é usado para associar o valor do parâmetro $genero à chave "genero" no array associativo
    ];
    foreach ($filme as $chave => $valor) { // Usamos um foreach para iterar sobre o array associativo do filme e exibir suas informações na tela
        echo "$chave: $valor\n"; // Exibe a chave e o valor de cada elemento do array do filme na tela
    }
}
criarFilme(nome: "Inception", ano: 2010, nota: 8.8, genero: "Sci-fi"); // Chamamos a função criarFilme passando os valores para nome, ano, nota e gênero do filme para criar o filme e exibir suas informações na tela.




















