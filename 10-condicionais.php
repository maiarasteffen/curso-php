<?php
/*
* condicionais
* if
* else
* elseif
*/

$numero = 8;
if ($numero == 10):
    echo "É igual a 10.";
elseif($numero <= 9):
    echo "É menor ou igual a 9.";
else:
    echo "É diferente de 10.";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado" : "Reprovado";
echo "<hr>";

/*
*switch
* case
*/
$cor = "vermelho";

switch ($cor):
    case "amarelo":
       echo "Sua cor preferida é o vermelho";
        break;
    
    case "verde":
      echo "Sua cor preferida é o verde";
      break;
    
    default:
    echo "Sua cor preferida não é nenhuma do nosso sistema";
    endswitch;