<?php


// echo phpinfo();

// Variablen beginnen in PHP mit $
$firstName = "Patrick";
$lastName = "Mairhofer";

// Datentypen
$string = "Ich bin ein String";


echo $firstName;

// Vergleichsoperatoren
$x = 10;
$y = 20;
var_dump($x == $y); // shows bool(false)


// If-Anweisung
if($x==$y){
    echo "x ist y";
}else{
    echo "x ist nicht y";
}

// Schleifen
for ($i = 0; $i < 5; $i++){
    echo $i . "<br>"; // concat with .
}

// Arrays
$array = array(1,2,3,4,5);
$array1 = [6,7,8,9];

// Assoziative Arrays
$age = array("Patrick" => 35, "Tom" => 30);


// for each
foreach ($array as $wert){
    echo $wert . ", ";
}

foreach ($age as $key => $value){
    echo $key . " ist " . $value . "Jahre alt.<br>";
}


// Funktionen
function greet($name = "Patrick Mairhofer"){
    //echo "Hallo " . $name;
    return "Hallo " . $name;
}
echo greet("TOMTOM");
echo greet();