<?php
/*
* Operadores Lógicos
* Nos permite fazer comparações entre expressões.
* e (&& - and)
* ou (|| - or)
* ou exclusivo (xor)
* negação (!)
*/
$idade = 25;
$nome = "Maiara";
if(($idade == 25) && ($nome == "Maiara")):
    echo "É verdadeiro.";
else:
    echo "É falso.";
endif;
echo "<hr>";

if(($idade == 25) || ($nome == "Maiara")):
    echo "É verdadeiro.";
else:
    echo "É falso.";
endif;
echo "<hr>";


if(($idade == 26) xor ($nome == "Maiara")):
    echo "É verdadeiro.";
else:
    echo "É falso.";
endif;
echo "<hr>";

if(!($idade == 25) && ($nome == "Maiara")):
    echo "É verdadeiro.";
else:
    echo "É falso.";
endif;
echo "<hr>";