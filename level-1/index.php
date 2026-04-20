<?php
//declaracion del array//
$numeros = [10,5,7,3,20];
//array indexado 6 elementos//
$languages = ["PHP", "HTML", "CSS", "Java", "JavaScript", "Python"];
//array asociativo sobre mi//
$aboutMe = [ "Name" => "Dylan" , "Age" => 21 , "Email" => "dylanphx93@gmail.com", "Favorite Food" => "Pizza"];
//array de palabras//
$palabras = ["hola", "clase", "manzana", "java", "hablar", "teclado", "maleta", "pantalla", "hacer", "cable"];
//caracter//
$char = '';

echo "<h3> PARTE 1</h3>";

//impresion de los elementos del array//
foreach ($numeros as $numero) {
         echo $numero . ",  ";
}

echo "<h3> PARTE 2</h3>";

//vemos el tamaño//
echo "El tamaño del Array es: ". count ($languages) . "<br>";

//vemos el indice antes de elimianarlo//
echo " <br> El indice [2] es:  " . $languages[2] . "<br>";

//Eliminamos el Elemento (2)//
array_splice($languages, 2, 1);

 //comprobamos que los indices se organizaron//
echo " <br> Comprobamos que se hayan Organizado los Indices: <br>";
echo " <br> El indice [2] ahora es:  " . $languages [2] . "<br>";

//vemos el tamaño despues de la eliminacion//
echo "<br>El nuevo tamaño del Array es: ". count ($languages) . "<br>";

//se muestra el contenido//
echo "<br>Elementos del Array:<br>";
foreach ($languages as $language) {
         echo "<br>" . $language . "<br>";
}

echo "<h3> PARTE 3</h3>";
//detectar caracteres//
function charDetector ($palabras , $char) {
    $resultado = true;
    foreach ($palabras as $palabra) {
       if (stripos($palabra, $char) === false ) {
           $resultado = false;
       }
    }
    return $resultado; 
}

echo charDetector ($palabras ,'a') ? "true" : "false";

echo "<br>" . (charDetector ($palabras ,'z') ? "true" : "false");

echo "<h3> PARTE 4</h3>";

//imprimimos el array asociativo ya creado//
foreach ($aboutMe as $key => $value) {
         echo $key . ":  " . $value . "<br>";
}

?> 