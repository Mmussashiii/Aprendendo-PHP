<?php

$ano = $argv [1];

$anoBissexto = (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) ? "Bissexto" : "Não Bissexto";

//Aqui usamos o operador de % para verificar o resto da divisão usamos != 0 para, em seguida usamos o operador lógico E (&&) e OU (||) para combinar as condições e verificar
//se o ano é bissexto ou não. depois usamos o operador ternário (?) para atribuir a string "Bissexto" ou "Não Bissexto" à variável $anoBissexto com base no
//resultado da verificação.


echo "O ano de $ano é: $anoBissexto";

//se o ano for bissexto ele é divisivel por quatro sem sobrar nada
//se o ano terminar em 00 ele não é bissexto a não ser que seja divisivel por 400