<?php
echo " PARTE 4 \n";

//array asociativo sobre mi//
$aboutMe = [ "Name" => "Dylan" , "Age" => 21 , "Email" => "dylanphx93@gmail.com", "Favorite Food" => "Pizza"];

//imprimimos el array asociativo ya creado//
foreach ($aboutMe as $key => $value) {
         echo $key . ":  " . $value . "\n";
}

?> 