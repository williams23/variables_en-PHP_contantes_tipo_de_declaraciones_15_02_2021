<?php

//null --- es igual a nada
//echo "<br>" ---- Genera un salto de linea
//String --- son letras, parrafos, etc todo lo que sea texto, mejor para que no consuma tanto
//$--- Define las variables
$letras = (string) "Counter Strike";

//Int --- es para numeros enteros
$numero = (int) 50;

//Flot --- almacena muchos números despues de la coma, double --- almacena solo 8 datos
$decimales = (double) 1.12345678;
$decimales_grande = (float) 1.123456789;

//bool --- Valores positivos o negativos (true = 1) (false = 0)
$logico = (bool) true;

//array --- Almacena listas (varias variables)
//var_dump($listas[0]); Imprime por pantalla el dato, número 0 ingresado
$listas = (array) ["Thomas" , 16, true];
$listas2 = new stdArray();
$listas3 = [];
var_dump($listas[0]);
echo "<br>";

//Maneras de imprimir por pantalla (echo imprime el valor) (var dump imprime valor y tipo de variable)
echo $letras;
echo $numero;
var_dump($letras);
var_dump($numero);
echo "<br>";

//object --- Guarda informacion sobre algo
//var_dump($vaso->altura); Imprime por pantalla el dato ingresado
$vaso = (object) [];
$vaso->color = "Rojo";
$vaso->altura = 15;
var_dump($vaso);
var_dump($vaso->altura);

?> 
 14  index2.php 
@@ -0,0 +1,14 @@


<?php

//Definir una constante
define("numero", 3.1415);
echo numero;

echo "<br>";

const letras = "Thomas";
echo letras;

?> 
 24  index3.php 
@@ -0,0 +1,24 @@


<?php
//Remplazo de variables
    $letras = (string) "Thomas Perez";
    echo $letras;

    echo "<br>";

    $letras = (string) "Isabella";
    echo $letras;

    echo "<br>";

    //Las constantes no pueden ser remplazadas
    const numero = 30;
    echo numero;

    echo "<br>";

    const Numero = 50;
    echo Numero;

?> 