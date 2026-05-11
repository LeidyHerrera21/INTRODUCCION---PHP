<?php

//Variable de entrada
$tipo_cine = "vip"; 

//Estructura de validación
if ($tipo_cine == "normal") {
    echo "Cine Normal: El costo es S/. 25";
} 
elseif ($tipo_cine == "vip") {
    echo "Cine VIP: El costo es S/. 40";
} 
elseif ($tipo_cine == "platinium") {
    echo "Cine Platinium: El costo es S/. 30";
} 
elseif ($tipo_cine == "general") {
    echo "Cine General: El costo es S/. 12";
} 
else {
    echo "Error: Tipo de entrada no reconocido.";
}

?>