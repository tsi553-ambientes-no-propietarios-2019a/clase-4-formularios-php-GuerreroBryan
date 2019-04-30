<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/
	$fecha = rand(1,365);
	$mes = 0;
	echo $fecha;
	echo "<br>";

	if($fecha <= 31){
			$mes = '01';
            echo "Enero"; 
            echo "$mes <br>";
        }else if($fecha <= 59){
        	$mes = '02';
            echo "Febrero"; 
            echo "$mes <br>";      
        }else if($fecha <= 90){
        	$mes = '03';
             echo "Marzo";
             echo "$mes <br>";
        }else if($fecha <= 120){
        	$mes = '04';
             echo "Abril";
            echo "$mes <br>";
        }else if($fecha <= 151){
        	$mes = '05';
             echo "Mayo";
            echo "$mes <br>";
        }else if($fecha <= 181){
        	$mes = '06';
             echo "Junio";
            echo "$mes <br>";
        }else if($fecha <= 212){
        	$mes = '07';
             echo "Julio";
            echo "$mes <br>";
        }else if($fecha <= 243){
        	$mes = '08';
             echo "Agosto";
            echo "$mes <br>";
        }else if($fecha <= 273){
        	$mes = '09';
            echo "$mes <br>";
            echo "Septiembre";
        }else if($fecha <= 304){
        	$mes = '10';
            echo "$mes <br>";
            echo "Octubre";
        }else if($fecha <= 334){
        	$mes = '11';
            echo "$mes <br>";
             echo "Noviembre";
        }else if($fecha <= 365){
        	$mes = '12';
            echo "$mes <br>";
             echo "Diciembre";
        }  

	 function dia($nombredia) {
		$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
		$fecha = $dias[date('N', strtotime($nombredia))];
		echo $fecha;
		}

	dia('2019-'.'$mes-'.'12');
	
?>