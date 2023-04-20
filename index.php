<?php


$variavel = 10;

if ($variavel < 20){
    echo " é maior que 20 ";
} else { 
    echo " é menor que 20";
}
    
echo "<br><br>";


for($i=0; $i<10; $i++) {
    echo $i. " ";
}

echo "<br><br>";
echo "usando while";

$j ="0";
while ($j <=10) {
    echo $j." ";
    $j++;
}

echo "<br><br>";
echo "usando while";

$switch =1;
switch ($switch) {
    case 1: echo "número 1";
        # code...
        break;
    
    default: echo "não é o valor informado";
        # code...
        break;
}






?>