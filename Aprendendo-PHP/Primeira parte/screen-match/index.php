<?php

require __DIR__ . "/src/funcoes.php"; // Inclui o arquivo funcoes.php, que contém as definições das funções usadas neste script.

echo "Bem-vindo(a) ao screen match!\n";  // \n código de escape (quebra de linha).
$nomeFilme = "Se beber não case";
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor : Ragnarock";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n"; // O . é o operador de concatenação, usado para juntar strings
echo "Nota do filme: $notaFilme\n"; // Este segue o exemplo de interpolação, no qual no php é possivel seguir com o uso de aspas e exibir o necessário.
echo "Ano de lançamento do filme: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento); // Chama a função para exibir a mensagem de lançamento do filme, passando o ano de lançamento como argumento.

$genero = match ($nomeFilme){// Expressão condicional match compara valores de uma váriavel com os valores definidos em cada caso para atribuir um valor a uma outra váriavel.
    "Top Gun - Maverick" => "Ação",
    "Thor : Ragnarock" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "Gênero do filme: $genero\n";

$filme = CriaFilme(  // Chama a função CriaFilme para criar um array associativo representando o filme, passando os detalhes do filme como argumentos.
    nome: "thor : ragnarock", // Estamos usando a sintaxe de argumentos nomeados para criar um array associativo representando o filme, onde cada chave é o nome do argumento e o valor é o dado correspondente.
     anoLancamento: 2021, // O ano de lançamento do filme é definido como 2021, indicando que o filme foi lançado nesse ano.
      nota: 7.8, // A nota do filme é definida como 7.8, representando a avaliação do filme em uma escala de 0 a 10.
       genero: "super-herói"// O gênero do filme é definido como "super-herói", indicando que o filme pertence a esse gênero específico.
); // Chama a função CriaFilme para criar um array associativo representando o filme, passando os detalhes do filme como argumentos.


echo $filme["ano"];

var_dump($notas);// estamos verificando o conteúdo da variável $notas, que é um array, para entender melhor o que está armazenado nela e como os dados estão organizados.

sort($notas); // A função sort() é usada para ordenar os elementos do array $notas em ordem crescente, facilitando a análise e a manipulação dos dados.

var_dump($notas); // Após a ordenação, estamos verificando novamente o conteúdo do array $notas para observar as mudanças na ordem dos elementos e garantir que a função sort() tenha sido aplicada corretamente.

$menorNota = min($notas); // A função min() é usada para encontrar o menor valor presente no array $notas, permitindo identificar a nota mais baixa entre as avaliações do filme.

var_dump($menorNota); // Estamos verificando o valor da variável $menorNota para confirmar que a função min() retornou corretamente o menor valor do array $notas.

var_dump($filme['ano']); // Estamos verificando o valor associado à chave 'ano' no array associativo $filme para entender melhor os dados armazenados e garantir que a estrutura do array esteja correta.

$posicaoDoispontos = strpos($filme['nome'], ':'); // A função strpos() é usada para encontrar a posição do caractere ':' na string associada à chave 'nome' do array $filme, permitindo identificar onde ocorre a separação entre o título e o subtítulo do filme.

 var_dump($posicaoDoispontos); // Estamos verificando o valor da variável $posicaoDoispontos para confirmar que a função strpos() retornou corretamente a posição do caractere ':' na string do nome do filme.

var_dump(substr($filme['nome'], 0, $posicaoDoispontos)); // A função substr() é usada para extrair uma parte da string associada à chave 'nome' do array $filme, começando do índice 0 até a posição do caractere ':' encontrada anteriormente, permitindo obter apenas o título principal do filme sem o subtítulo. Estamos verificando o resultado para garantir que a extração foi realizada corretamente.

var_dump(json_decode('{"nome":"thor : ragnarock","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}'), true);

$filmeComoStringJson = json_encode($filme); // A função json_encode() é usada para converter o array associativo $filme em uma string no formato JSON, facilitando o armazenamento e a transmissão dos dados de forma estruturada.

file_put_contents('filme.json', $filmeComoStringJson); // A função file_put_contents() é usada para escrever a string JSON representando o filme em um arquivo chamado 'filme.json', permitindo salvar os dados do filme em um formato legível e acessível para futuras consultas ou compartilhamento.




















































