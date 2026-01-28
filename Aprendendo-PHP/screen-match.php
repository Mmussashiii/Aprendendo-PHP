<?php

echo "Bem-vindo(a) ao screen match!\n";  // \n código de escape (quebra de linha).
$nomeFilme = "Se beber não case";
$nomeFilme = "Top Gun - Maverick"; 
$nomeFilme = "Thor : Ragnarock"; 

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1; 

for($contador = 1; $contador <= $argc; $contador++){
    $somaDeNotas += $argv[$contador];
}

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
    "Top Gun - Maverick" => "Ação",
    "Thor : Ragnarock" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "Gênero do filme: $genero\n";

echo $argc; // Exibe o número de argumentos passados para o script, incluindo o nome do script.