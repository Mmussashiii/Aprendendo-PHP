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

























