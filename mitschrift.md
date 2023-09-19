# Mitschrift

Apache server mit XAMMP oder DOCKER

Opening tag:
<?php
Closing tag: (not needed if only php)
?>


Kommentare wie in JAVA: //

// Datentypen
$string = "Ich bin ein String";
$i = 2; => Integer
$d = 3.2 => decimal
$n = null;

// Extensions
PHP Intelephense


// Konstanten
const PI = 3.14159265359;

// Vergleichsoperatoren
$x = 10;
$y = 20;
var_dump($x == $y); // shows bool(false)
==
!=
<=
>=
var_dump($x === $y); // Vergleicht auch Datentypen

// If-Anweisung
if($x==$y){
    echo "x ist y";
}else{
    echo "x ist nicht y";
}


// Verküpfungen mit && ...

// auch while, do ...

// Schleifen
for ($i = 0; $i < 5; $i++){
    echo $i . "<br>"; // concat with "."
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
echo greet();


// call by value or => ohne &
// call by reference => mit &