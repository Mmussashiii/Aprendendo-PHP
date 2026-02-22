<?php


$caminhoArquivo = __DIR__ . '/filme.json'; // A constante mágica __DIR__ é usada para obter o diretório atual do arquivo PHP, e concatenamos com '/filme.json' para formar o caminho completo do arquivo JSON que contém os dados do filme.

$conteudoArquivoFilme = file_get_contents($caminhoArquivo); // A função file_get_contents() é usada para ler o conteúdo do arquivo especificado pelo caminho $caminhoArquivo, retornando os dados do filme como uma string.

$filme = json_decode($conteudoArquivoFilme, true); // A função json_decode() é usada para decodificar a string JSON contida em $conteudoArquivoFilme, convertendo-a em um array associativo do PHP. O segundo parâmetro, quando definido como true, indica que o resultado deve ser um array associativo em vez de um objeto.

var_dump($filme); // A função var_dump() é usada para exibir informações detalhadas sobre a variável $filme, incluindo seu tipo e conteúdo, permitindo verificar se a decodificação do JSON foi realizada corretamente e se os dados do filme foram carregados com sucesso.












