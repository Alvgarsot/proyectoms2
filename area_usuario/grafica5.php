<?php
session_start();
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph_bar.php');

require('../configuracion_bd.php');
$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
$consulta="SELECT count(nombre_usuario) as veces, nombre_usuario FROM lista , usuario WHERE lista.nombre_usuariofk=usuario.nombre_usuario group by nombre_usuario";
 $result=$connection->query($consulta);
while($obj=$result->fetch_object()){
				 $veces[]=$obj->veces;
                $usu[]=$obj->nombre_usuario;
                }



// Create the graph. These two calls are always required
$graph = new Graph(600,350,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,2,4,6,8,10), array(1,3,5,7,9));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($usu);
$graph->xaxis->SetLabelAngle(20);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($veces);


// Create the grouped bar plot
//$gbplot = new GroupBarPlot(array($b1plot));
// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");



// Display the graph
$graph->Stroke();
?>