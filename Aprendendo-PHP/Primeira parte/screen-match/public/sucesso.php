
<h1>Sucesso! Filme <?php echo $_GET['filme']; ?> inserido</h1> 
<br>
<?php

//No arquivo que possui a mensagem de sucesso após exportar o arquivo no caso sucesso.php, leia o arquivo exportado e exiba todas as informações do filme.
//converta o arquivo filme que está em formato JSON para um array associativo do PHP usando a função json_decode() e exiba as informações do filme de forma legível para o usuário

$conteudoArquivoFilme = file_get_contents(__DIR__ . '/filme.json'); // A função file_get_contents() é usada para ler o conteúdo do arquivo 'filme.json' localizado no mesmo diretório do script, retornando os dados do filme como uma string.
$filme = json_decode($conteudoArquivoFilme, true); // A função json_decode() é usada para decodificar a string JSON contida em $conteudoArquivoFilme, convertendo-a em um array associativo do PHP. O segundo parâmetro, quando definido como true, indica que o resultado deve ser um array associativo em vez de um objeto.

echo "Nome do filme: " . $filme['nome'] . "<br>"; // Exibe o nome do filme, acessando a chave 'nome' do array associativo $filme e concatenando com a string "Nome do filme: " para exibir uma mensagem legível para o usuário.
echo "Ano de lançamento: " . $filme['ano'] . "<br>"; // Exibe o ano de lançamento do filme, acessando a chave 'ano' do array associativo $filme e concatenando com a string "Ano de lançamento: " para exibir uma mensagem legível para o usuário.
echo "Nota: " . $filme['nota'] . "<br>"; // Exibe a nota do filme, acessando a chave 'nota' do array associativo $filme e concatenando com a string "Nota: " para exibir uma mensagem legível para o usuário.
echo "genero: " . $filme['genero'] . "<br>"; //exibe o gênero do filme, acessando a chave 'genero' do array associativo $filme e concatenando com a string "Gênero: " para exibir uma mensagem legível para o usuário.



















