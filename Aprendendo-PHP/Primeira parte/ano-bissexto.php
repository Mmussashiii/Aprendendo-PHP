<?php

$ano = $argv [1];

$anoBissexto = (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) ? "Bissexto" : "Não Bissexto";

//Aqui usamos o operador de % para verificar o resto da divisão usamos != 0 para, em seguida usamos o operador lógico E (&&) e OU (||) para combinar as condições e verificar
//se o ano é bissexto ou não. depois usamos o operador ternário (?) para atribuir a string "Bissexto" ou "Não Bissexto" à variável $anoBissexto com base no
//resultado da verificação.


echo "O ano de $ano é: $anoBissexto";

//se o ano for bissexto ele é divisivel por quatro sem sobrar nada
//se o ano terminar em 00 ele não é bissexto a não ser que seja divisivel por 400




//para adicionar esta pasta ao github, basta seguir os seguintes passos:
//1. git init (inicializa o repositório git na pasta atual) 
//2. git add . (adiciona todos os arquivos e pastas ao staging area do git, preparando-os para serem commitados)
//3. git commit -m "commit message" (cria um commit com as mudanças adicionadas ao staging area, usando a mensagem fornecida para descrever as mudanças)
//4. git remote add origin <URL do repositório remoto> (adiciona um repositório remoto chamado "origin" com a URL fornecida, permitindo que você envie suas mudanças para esse repositório remoto)
//5. git push origin main (envia as mudanças do branch local "main" para o repositório remoto "origin", atualizando o branch remoto com as mudanças locais)

//