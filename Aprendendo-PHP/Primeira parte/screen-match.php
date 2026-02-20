<?php

function exibeMensagemLancamento (int $ano): void { // Função para exibir a mensagem de lançamento do filme, recebendo o ano como parâmetro.
    if ($ano > 2022) { // Verifica se o ano é maior que 2022, indicando que o filme é um lançamento.
    echo "Este filme é Lançamento!\n";
} elseif ($ano >= 2020 && $ano <= 2022) {// Verifica se o ano está entre 2020 e 2022, indicando que o filme é recente.
    echo "Este filme é Recente!\n";
} else {// Caso contrário, o filme é considerado antigo.
    echo "Este filme é Antigo!\n";
}
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool { // Função para verificar se o filme está incluído no plano, recebendo o status do plano e o ano de lançamento como parâmetros, e retornando um valor booleano.
    return $planoPrime || $anoLancamento < 2020;// Retorna true se o planoPrime for verdadeiro ou se o ano de lançamento for anterior a 2020, indicando que o filme está incluído no plano.
};




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

$filme = [
    "nome" => "thor : ragnarock",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

echo $filme["ano"];

