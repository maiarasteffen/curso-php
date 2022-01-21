<?php
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
print_r($carros);
echo "<br>";
$carros[10] ="Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[]= "Yamaha";
$motos[]= "Honda";
$motos[5]= "Suzuki";
print_r($motos);
echo "<br>";
echo $motos[5];
echo "<br>";

$clientes = ["Maiara", "Cleiton", "Cleia"];
print_r($clientes);
echo "<hr>";

//Count
echo count($carros);
echo "<br>";
echo count($motos);
echo "<br>";
echo count($clientes);
echo "<hr>";

//Outra forma de usar count
$totalCarros = count($carros);
echo $totalCarros;
echo "<br>";
$totalMotos = count($motos);
echo $totalMotos;
echo "<br>";
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//loop com foreach
foreach ($carros as $valor) {
    echo $valor."<br>";
}
echo "<br>";
foreach ($motos as $valor) {
    echo $valor."<br>";
}
echo "<br>";
foreach ($clientes as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

// arrays associativos
$pessoa = array("nome" => "Maiara" , "idade" => 29, "altura" => 1.57);
$pessoa["cidade"] = "Porto Belo";
print_r($pessoa);
echo "<br>";
echo $pessoa["nome"];
echo "<br>";
echo $pessoa["idade"];
echo "<br>";
echo $pessoa["altura"];
echo "<hr>";

foreach ($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

// arrays multidimencionais

$times = array(
        "cariocas" => array("campeão" => "vasco", "vice-campeão" => "fluminense", "terceiro" => "botafogo"),
        "paulista" => array("campeão" => "santos", "vice-campeão" => "palmeiras", "terceiro" => "são paulo"),
        "catarinense" => array("campeão" => "joinville", "vice-campeão" => "chapecoense", "terceiro" => "havaí")
        );
foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";
foreach ($times["paulista"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";
foreach ($times["catarinense"] as $indice => $valor) {
   echo $indice.": ".$valor."<br>";
}
echo "<hr>";

