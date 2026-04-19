<?php
//arrays//
$numeros = [10,5,7,3,20];
$languages = ["PHP", "HTML", "CSS", "Java", "JavaScript", "Python"];

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
?> 