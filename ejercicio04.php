<?php 

for ($i=1; $i < 5; $i++) {
    print("SENATI <br> ");
    if ($i==3) {
        print("<br> a la 2 palabra que imprima SENATI ganaste un premio");
    }
}

$variable = array_fill(0,5, "senati");

foreach ($variable as $key => $value) {
    echo $value . "<br>";
    if ($value==1){
        print("<br> ganaste un carro TOYOTA");
    }
}

?>