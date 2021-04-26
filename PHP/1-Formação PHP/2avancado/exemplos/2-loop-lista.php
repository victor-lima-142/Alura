<?php
$idadeList = [21, 22, 45, 31, 17, 13, 28, 45];

for ($i=0; $i < 6; $i++) { 
    echo $idadeList[$i].PHP_EOL;  
}
echo PHP_EOL;
//CONTAR ITENS
echo count($idadeList);
echo PHP_EOL;
echo PHP_EOL;
//FORMA DE LOOP  2
for ($i=0; $i < count($idadeList); $i++) { 
    echo $idadeList[$i].PHP_EOL;  
}