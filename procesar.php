<html lang="es">
<head>
	<meta charset="utf-8">
  <title>Proyecto Tionvel</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style type="text/css">
  	
    body{


    	background: black;
    	color:white;
    }

    h1
    {

    	color: rgba(0,0,255,1);
    	text-shadow: -8px -14px 0px rgba(0,0,255,0.4);
    }

  </style>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-sm-12 text-center">
	
	<h1>Proyecto Tionvel</h1>

</div>	
</div>
</div>

<?php
//Guarda el string no limpio de la consulta Get de la URL resultante de index.php
$consulta=$_SERVER['QUERY_STRING'];




//limpia el string consulta de & y separa
$consulta_explode= (explode("&",$consulta));

//Contabiliza la cantidad de elementos del arreglo 
$cantidad_elementos=count($consulta_explode);


$arreglo_limpio=array();
//Éste ciclo genera un arreglo mucho más depurado, limpio al 100%
for ($i=0; $i <$cantidad_elementos ; $i++) { 



	$resultado = substr($consulta_explode[$i],6);
    array_push($arreglo_limpio,"$resultado");
  
}

//Declaración de variables para guardar enteros y fechas por separado
$enteros=array();
$fechas=array();

$y=1;
$i=0;
$i2=1;
    //Lectura intercalada para recorrer frecuencua A[0]= integer, , A[1]=date, A[2]=integer, A[3]=date y así sucesivamente. 
	for ($i=0; $i <$cantidad_elementos ; $i+= 2) 
	{ 

	   
		
	  while ( $i2<$cantidad_elementos) {

       //echo "$arreglo_limpio[$i2]" ." ";
       array_push($fechas, "$arreglo_limpio[$i2]");
	  	$i2+=2;
	  }

	//echo "$arreglo_limpio[$i]" ."  ";
	array_push($enteros, "$arreglo_limpio[$i]");
	  
	//$tmp=$arreglo_limpio[$i];   

	}

    //Resultado se obtienen dos arreglos en que la posición 0 de uno es equivalente con la 0 del otro y así sucesivamente.

	for ($p=0; $p <$cantidad_elementos/2 ; $p++) {
	//Función que calculará la suma de días (enteros) a una fecha X
	Calculo_Suma($enteros[$p],$fechas[$p]);
	}



function Calculo_Suma($days, $initial_date) {
   

echo "<br>";
echo "Usted ha seleccionado como dato inicial ".$initial_date. " Le ha sumado " .$days. " días, y el resultado de la suma de días exceptuando sábados y domingos es " ;

$Secs=0; 



for ($i=0; $i <$days ; $i++) { 
	

	$Secs = $Secs + 86400; //se contabiliza en segundos , 1 día= 86400 segundos

	



	$Finish_day = date("D",strtotime($initial_date)+$Secs); //se convierte la fecha inicial yyyy-mm-dd a segundos
     
     
	//El siguiente if valida si es sábado (SAT) o Domingo(Sun) que los reste del conteo
		if ($Finish_day == "Sat")
			{
				$i--;
			}
			else if ($Finish_day == "Sun")
			{
				$i--;
			}
			else
			{
                 //Calcula el resultado final
				$EndDate = date("Y-m-d",strtotime($initial_date)+$Secs); 

			}
}

echo "$EndDate";

}




?>

