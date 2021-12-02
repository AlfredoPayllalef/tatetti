<?php
include_once("tateti.php");

/************************************* DATOS DE LOS INTEGRANTES *********************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/*Alfredo Nicolas Payllalef|FAI 3496| Mail: alfredo.payllalef@est.fi.uncoma.edu.ar| Usuario de github: AlfredoPayllalef
Fabian Facundo Muñoz Huinolpan|FAI 1787| Mail: Fabianchock@Gmail.com| Usuario de github: threeIslands3
Luciana Romano|FAI 3075| Mail: luciana.romano@est.fi.uncoma.edu.ar| Usuario de github: lucianaromano 
*/

/************************************* DEFINICION DE FUNCIONES ********************************************/

/**
 * Obtener coleccion de juegos a traves de ejemplos de juego
 *  @return array
 */
function cargarJuegos (){
    //array $juego0 , $juego1, $juego2, $juego3, $juego4, $juego5, $juego6, $juego7, $juego8, $juego9

    $juego1=["jugadorCruz"=> "MAJO" , "jugadorCirculo" => "DAVID", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $juego2=["jugadorCruz"=> "PABLO" , "jugadorCirculo" => "SEBA", "puntosCruz"=> 0, "puntosCirculo" => 3];
    $juego3=["jugadorCruz"=> "JUAN" , "jugadorCirculo" => "MABEL", "puntosCruz"=> 0, "puntosCirculo" => 5];
    $juego4=["jugadorCruz"=> "CARLOS" , "jugadorCirculo" => "DANIEL", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $juego5=["jugadorCruz"=> "RUBEN" , "jugadorCirculo" => "PAULA", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $juego6=["jugadorCruz"=> "JOAQUIN" , "jugadorCirculo" => "SOL", "puntosCruz"=> 0, "puntosCirculo" => 4];
    $juego7=["jugadorCruz"=> "MARIA" , "jugadorCirculo" => "CARLOS", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $juego8=["jugadorCruz"=> "SOL" , "jugadorCirculo" => "JOAQUIN", "puntosCruz"=> 0, "puntosCirculo" => 3];
    $juego9=["jugadorCruz"=> "SOFIA" , "jugadorCirculo" => "BLANCA", "puntosCruz"=> 4, "puntosCirculo" => 0];
    $juego10=["jugadorCruz"=> "MARTIN" , "jugadorCirculo" => "FEDE", "puntosCruz"=> 1, "puntosCirculo" => 1];
  
    $coleccionJuegos = []; //inicializo el arreglo $coleccionJuegos
    $coleccionJuegos[0]= $juego1;
    $coleccionJuegos[1]= $juego2;
    $coleccionJuegos[2]= $juego3;
    $coleccionJuegos[3]= $juego4;
    $coleccionJuegos[4]= $juego5;
    $coleccionJuegos[5]= $juego6;
    $coleccionJuegos[6]= $juego7;
    $coleccionJuegos[7]= $juego8;
    $coleccionJuegos[8]= $juego9;
    $coleccionJuegos[9]= $juego10;

    $coleccionJuegos = [];

    $jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
    $jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
    $jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
    $jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
    $jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
    $jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
    $jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

    array_push($coleccionJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);

    
    return ($coleccionJuegos);
//print_r($juego3); para que me muestre los resultados de las colecciones
}


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

      if (($opcionMenu<0) || ($opcionMenu> 7) or !ctype_digit($opcionMenu)) {
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
    echo "Ingrese un valor:"; //entre " .$min. " y ".$max. ":";
    $valor = trim(fgets(STDIN));
    while ($valor < $min || $valor >$max ) {
        echo ("El valor no es valido, ingrese un valor valido:");
        $valor = trim(fgets(STDIN));
    }
    return $valor;
}

/**
 * Muestra en pantalla los datos del juego
 * @param array $juego
 * @param int $numJuego
 */
function datosJuego($juego, $numJuego)
{
    //
    $juego = $coleccionJuegos[$numJuego];//-1
    if ($juego["puntosCruz"] > $juego["puntosCirculo"]){
        $resultadoJuego="gano X";
    }
    elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        $resultadoJuego="gano O ";
    }
    else {
        $resultadoJuego="empate";
    }
    echo ("Juego TATETI: ") .$numJuego. "(" .$resultadoJuego. ")\n";
    echo ("Jugador X: ") .$nombreJugadorCruz. " obtuvo " .$puntosCruz. " puntos\n";
    echo ("Jugador O: ") .$nombreJugadorCirculo. " obtuvo " .$puntosCirculo. " puntos\n";  
}


/**esta funcion agrega otra partida.
 * @param array $agregarjuego 
 * @param string $nombre
 * @param string $simbolo
 * @param int $puntos
 * @return array
 */

function agregarjuego($agregarjuego, $nombre, $simbolo, $puntos){
     $i=count($agregarjuego);
     $agregarjuego[$i]=[$nombre,$simbolo,$puntos];
     return $agregarjuego;
}

/**
 * Inicializo una estructura de datos para los juegos
 * @return array 
 */
function arregloJuegos() 
{
   // array $juegos
   $juegos =[] ; //incializo el arreglo $resumenJugador
   $juegos = ["jugadorCruz"=> "nombreX", "jugadorCirculo"=> "nombreO","puntosCruz" => "ptosX","puntosCirculo"=> "ptosO"];

   return $juegos;
}

/**
 * Inicializo una estructura de datos para ver el resumen del jugador
 * @param string $nombre
 * @param int $juegosGanados, $juegosPerdidos, $juegosEmpatados, $puntosAcumulados
 * @return array 
 */

function arregloResumenJugador($nombre,$juegosGanados,$juegosPerdidos, $juegosEmpatados, $puntosAcumulados) 
{
   // array $resumenJugador
   $resumenJugador =[] ; //incializo el arreglo $resumenJugador
   $resumenJugador = ["nombre"=> $nombre, "juegosGanados" => $juegosGanados, "juegosPerdidos"=> $juegosPerdidos, 
   "juegosEmpatados"=> $juegosEmpatados, "puntosAcumulados"=> $puntosAcumulados];

   return $resumenJugador;
}


/**
 * @param array $array
 * @param string $nombre
 * @return int $primerGanado
 * */
function buscarPimerGanado($arrayColeccion,$nombre){
    $n=count($arrayColeccion);//busca la dimencion del array
    $i=0;
    $bandera= true;
    while ($i <$n && $bandera) { //recorre el cada arreglo 
        $j="jugadorCruz";
        $bandera2=true;
        while ($bandera2==true) { //recorre los primeros dos elemntos del arreglo
            if ($arrayColeccion[$i][$j]==$nombre) {
                if($arrayColeccion[$i]["puntosCruz"]>1 or $arrayColeccion[$i]["puntosCirculo"]>1 ){
                    $primerGanado=$i;
                    $bandera= false;
                    $bandera2=false;
                }else{
                    if ($j=="jugadorCirculo") {
                        $primerGanado=-1;
                        $bandera2=false;
                    }else{
                    $primerGanado=-1;
                    $j="jugadorCirculo";
                    $bandera2=true;
                    }
                }   
            }else{
                if ($j=="jugadorCirculo") {
                    $primerGanado=-1;
                    $bandera2=false;
                }else{
                $primerGanado=-1;
                $j="jugadorCirculo";
                $bandera2=true;
                }
            }
        }$i=$i+1;  
    }
    return $primerGanado;
}

function cmp($juegoA, $juegoB) {//$juegoA,juegoB
    if ($juegoA["jugadorCirculo"] == $juegoB["jugadorCirculo"]) {
        $orden=0;
    }
    elseif($juegoA["juegoCirculo"]<$juegoB["jugadorCirculo"]) {
        $oreden=-1;
    } else {
        $orden=1;
    }
    return $orden;
}

function ordenarO($arrayJuegos){
    uasort($arrayJuegos, 'cmp');
    print_r($arrayJuegos);
}
/****************************************** PROGRAMA PRINCIPAL **********************************************/


//Declaración de variables:
//array $coleccionJuegos, $juego

//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



do {
    $opcion = seleccionarOpcion ();
    if ($opcion == 1) { //jugar al tateti, el usuario debe ingresar si elige X o O

    } elseif ($opcion == 2) { //Se le solicita al usuario un número de juego
        //funcion solicitarValor (primer juego, ultimo juego)
        echo ("Ingrese un número de juego:"); //el numero de juego debe ser valido
        $nJuego = trim(fgets(STDIN));
        $datosJuego1 = datosJuego($juego, $nJuego);
        


    } elseif ($opcion == 3) { //mostrar el primer juego ganador
        echo"ingrese nombre del jugador ";
        $nombrebuscado=trim(fgets(STDIN));
        $primerGanado = buscarPimerGanado($coleccionJuegos,$nombrebuscado);
        echo"el primer juego ganado es el \n".$primerGanado."\n";

    } elseif ($opcion == 4) { //mostrar porcentaje de juegos ganados


    } elseif ($opcion == 5) { //mostrar resumen de 
        // muestra en pantalla un resumen de los juegos ganados, los juegos perdidos, empates y acumulado de puntos
        //funcion resumenJugador
        echo ("Ingrese el nombre del jugador:");
      $nombreResumen = trim(fgets(STDIN));


    } elseif ($opcion== 6) { //mostrar listado de juegos ordenado por jugador O


    } else { //salir del programa
        echo "  Saliendo del Programa ...\n";
        sleep(4);  //a los 4s va a salir del programa
    }

} while ($opcion);
//                   FIN









/*do //{
    $opcion = ...;

    
    //switch ($opcion) {
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
} while ($opcion != X); */
