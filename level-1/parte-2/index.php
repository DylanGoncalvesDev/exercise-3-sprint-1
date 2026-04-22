<?php
//array indexado 6 elementos//
$languages = ["PHP", "HTML", "CSS", "Java", "JavaScript", "Python"];

echo " PARTE 2 \n";

//vemos el tamaño//
echo "El tamaño del Array es: ". count ($languages) . "\n";

//vemos el indice antes de elimianarlo//
echo " El indice [2] es:  " . $languages[2] . "\n";

//Eliminamos el Elemento (2)//
array_splice($languages, 2, 1);

 //comprobamos que los indices se organizaron//
echo " \n Comprobamos que se hayan Organizado los Indices: ";
echo " \n El indice [2] ahora es:  " . $languages [2];

//vemos el tamaño despues de la eliminacion//
echo "\n El nuevo tamaño del Array es: ". count ($languages) . "\n";

//se muestra el contenido//
echo " Elementos del Array: \n";
foreach ($languages as $language) {
         echo $language . "\n";
}
?> 