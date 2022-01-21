<?php
for ($contador= 0; $contador <= 10 ; $contador++) { 
   echo "2 x $contador = ".($contador*2)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "3 x $contador = ".($contador*3)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "4 x $contador = ".($contador*4)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "5 x $contador = ".($contador*5)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "6 x $contador = ".($contador*6)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "7 x $contador = ".($contador*7)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "8 x $contador = ".($contador*8)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "9 x $contador = ".($contador*9)."<br>";
}
echo "<hr>";

for ($contador= 0; $contador <= 10 ; $contador++) { 
    echo "10 x $contador = ".($contador*10)."<br>";
}
echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;