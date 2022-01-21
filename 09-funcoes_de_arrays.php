<?php
/*is_array($array) - verificar se uma determinada variável é um array */
$nomes = array("Maiara", "Cleiton", "Pérola", "Matheus");

echo is_array($nomes);

var_dump(is_array($nomes));

if(is_array($nomes)):
    echo "É um array.";
else:
    echo "Não é um array.";
endif;

echo "<hr>";

/* in_array($valor, $array) - verifica se um determinado valor existe em alguma posição do array*/ 
$nomes = array("Maiara", "Cleiton", "Pérola", "Matheus");

echo in_array("Pérola", $nomes);
echo "<br>";

if(in_array("Maiara", $nomes)):
    echo "Existe no array.";
else:
    echo "Não existe no array";
endif;
echo "<hr>";

/* array_keys($array) - retorna um novo array com as chaves do array passado como parâmetro */
/* $nomes = array("mãe" => "Maiara", "Pai" =>"Cleiton", "Irmã" => "Pérola", "Irmão"=> "Matheus");
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>"; */

/*array_values($array) - Retorna um novo array com valores de array passado como parâmetro*/ 
$values = array_values($nomes);
print_r($values);
echo "<hr>";

/* array_merge($array1, $array2)- agrega conteúdo dos dois arrays */
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Xj", "Biz", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

/* array_pop($array) - exclui a ultima posição do array */
/*print_r($carros);
echo "<br>";
array_pop($carros);
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<hr>"; */

/* array_shift($array) - exclui a primeira posição do array */
/*print_r($carros);
echo "<br>";
array_shift($carros);
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<hr>"; */

/*array_unshift($arr, "valor") - adiciona um ou mais elementos no inicio do arraym */
$frutas = array("Uva", "Maçã", "Pêra");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Laranja", "Morango");
print_r($frutas);
echo "<hr>";

/*array_push($arr, "valor") - adiciona um ou mais elementos no final do array */
$brincadeiras = array("Amarelinha", "Queimada", "Pião");
print_r($brincadeiras);
echo "<br>";
array_push($brincadeiras, "Pega-pega", "Boneca", "Trilha");
print_r($brincadeiras);
echo "<hr>";

/*array_combine($keys, $values) - mescla os dois arrays */
$keys = array("Campeão", "Vice", "terceiro");
$values = array("Joinville", "Chapecoense", "Havaí");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

/*array_sum() - serve para calcular a soma dos elementos de um array */

$soma = array(5, 6, 10, 8);
$total = array_sum($soma);
echo $total;
echo "<hr>";

/* explode("/", "29/09/2021") - transforma uma string em array */
$data = "29/09/2021";

$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";

$frase = "Meu nome não é john";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

/* implode("-", $arr) - transforma array em string */
$pessoas = array("Cris", "Neusa", "Elza" , "Talita");
$string = implode(", ", $pessoas);
print_r($string);