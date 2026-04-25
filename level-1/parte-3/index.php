<?php
echo " PARTE 3 \n";

$palabras = ["hola", "clase", "manzana", "java", "hablar", "teclado", "maleta", "pantalla", "hacer", "cable"];

$char = "";

function detectarChar ( array $palabras , string $char): bool {
    $resultado = true;
    foreach ($palabras as $palabra) {
       if (stripos($palabra, $char) === false ) {
           $resultado = false;
       }
    }
    return $resultado; 
}

echo detectarChar ($palabras ,"a") ? "true" : "false";

echo "\n" . (detectarChar ($palabras ,"z") ? "true" : "false");
?> 