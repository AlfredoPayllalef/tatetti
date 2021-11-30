<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/*Alfredo Nicolas Payllalef FAI 3496 Mail: alfredo.payllalef@est.fi.uncoma.edu.ar Usuario de github AlfredoPayllalef
Fabian Facundo Muñoz Huinolpan FAI 1787 Mail: Fabianchock@Gmail.com Usuario de github  threeIslands3
Luciana Romano  FAI 3075 Mail: luciana.romano@est.fi.uncoma.edu.ar Usuario de github lucianaromano 
*/



/************************************* DEFINICION DE FUNCIONES *******************************************/

/**
* Muestro en pantalla las opciones del Menu, si el valor no es válido se le pedira otro hasta que lo sea.
* @return int
*/
function seleccionarOpcion()
{
    //int $opcionMenu
    do{
      echo "[1] Jugar al tateti \n";
      echo "[2] Mostrar un juego\n";
      echo "[3] Mostrar el primer juego ganador \n";
      echo "[4] Mostrar porcentaje de juegos ganados\n";
      echo "[5] Mostrar resumen de jugador\n";
      echo "[6] Mostrar listado de juegos ordenado por jugador O \n";
      echo "[7] Salir\n";
      echo "Ingrese opcion: ";
      $opcionMenu = trim(fgets(STDIN));

      if (($opcionMenu<0) || ($opcionMenu> 7)) {
        echo "Opcion Incorecta! Ingrese otra opcioón: \n";
      }
    } while (!($opcionMenu == 1 || $opcionMenu == 2 || $opcionMenu == 3 || $opcionMenu == 4 || $opcionMenu == 5 || $opcionMenu == 6 || $opcionMenu == 7));
    // Repito si es igual a valores ($opcioMenu == valores)
    return $opcionMenu;
}


/**
 * Solicita un numero dentro de un rango, si no es valido, pide un valor hasta que lo sea
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarValor( $min, $max)
{
    //int $valor
    echo "Ingrese un valor entre " .$min. " y ".$max. ":";
    $valor = trim(fgets(STDIN));
    while ($valor < $min || $valor >$max ) {
        echo ("El valor no es valido, ingrese un valor valido:");
        $valor = trim(fgets(STDIN));
    }
    return $valor;
}




/****************************************** PROGRAMA PRINCIPAL **********************************************/


//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/