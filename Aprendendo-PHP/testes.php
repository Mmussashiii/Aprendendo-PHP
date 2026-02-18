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
}

<<<<<<< Updated upstream:Aprendendo-PHP/testes.php
=======
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






















>>>>>>> Stashed changes:Primeira parte/testes.php
