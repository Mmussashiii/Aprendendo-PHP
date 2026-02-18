<?php

echo "Bem-vindo(a) ao screen match!\n";  // \n código de escape (quebra de linha).
$nomeFilme = "Se beber não case";
$nomeFilme = "Top Gun - Maverick"; 
$nomeFilme = "Thor : Ragnarock"; 

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1; 
$notas = []; // O array $notas é inicializado como um array vazio, pronto para receber os valores das notas que serão inseridas posteriormente no loop for.

for($contador = 1; $contador <= $argc; $contador++){
    $notas[$contador - 1] = (float) $argv[$contador]; // O (float) é usado para converter o valor do argumento em um número de ponto flutuante, permitindo que seja tratado como um número decimal.
}

$somaDeNotas = 0;





$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true; 

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020; 

echo "Nome do filme: " . $nomeFilme . "\n"; // O . é o operador de concatenação, usado para juntar strings
echo "Nota do filme: $notaFilme\n"; // Este segue o exemplo de interpolação, no qual no php é possivel seguir com o uso de aspas e exibir o necessário.
echo "Ano de lançamento do filme: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Este filme é Lançamento!\n";
} else if ($anoLancamento >= 2020 && $anoLancamento <= 2022) {
    echo "Este filme é Recente!\n";
} else {
    echo "Este filme é Antigo!\n";
}

$genero = match ($nomeFilme){// Expressão condicional match compara valores de uma váriavel com os valores definidos em cada caso para atribuir um valor a uma outra váriavel.
    "Top Gun - Maverick" => "Ação", // O operador => é usado para associar um valor a uma chave em um array associativo ou para definir o resultado de um caso em uma expressão match.
    "Thor : Ragnarock" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido" // O default é usado para definir um valor padrão caso nenhum dos casos anteriores seja atendido.
};

echo "Gênero do filme: $genero\n";

echo $argc; // Exibe o número de argumentos passados para o script, incluindo o nome do script.

$filme = [ // abrimos nosso array associativo com colchetes [] e dentro dele definimos as chaves e os valores associados a cada chave usando o operador =>.
    "nome" => "Thor: Ragnarok", // O operador => é usado para associar um valor a uma chave em um array associativo. Neste caso, "nome" é a chave e "Thor: Ragnarok" é o valor associado a essa chave.
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

echo $filme["nome"] . "\n"; // Para acessar os valores de um array associativo, usamos a chave correspondente entre colchetes. Neste caso, $filme["nome"] retorna o valor associado à chave "nome", que é "Thor: Ragnarok".
echo $filme["ano"] . "\n";
echo $filme["nota"] . "\n";
echo $filme["genero"] . "\n";