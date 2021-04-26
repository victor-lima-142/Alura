<?php
for ($i=1; $i <= 15; $i++) {
    if ($i != 13) {
        echo "#$i".PHP_EOL;     
    }
}
echo PHP_EOL;
//OUTRA FORMA
for ($j=1; $j <= 15; $j++) { 
    if ($j == 13) {
        continue;
    }
    echo "#$j".PHP_EOL;
}