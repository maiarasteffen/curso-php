<?php
// Constante
define("NOME", "Maiara Steffen");
define("IDADE", 29);
define("ALTURA", 1.57);

define("TIMES", [
    'Jec',
    'Havaí',
    'Chapecoense'
]);

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA. '.';
echo "<hr>";

echo TIMES[1];

function exibeNome() {
    echo NOME;
}
exibeNome();
