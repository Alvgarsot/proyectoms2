<?php
session_start();
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph_bar.php');

require('../configuracion_bd.php');
$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
$consulta="SELECT count(id_cancion) as veces, genero FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 GROUP BY genero";
 $result=$connection->query($consulta);
while($obj=$result->fetch_object()){
				 $veces[]=$obj->veces;
                $genero[]=$obj->genero;
                }



// Create the graph. These two calls are always required
$graph = new Graph(600,350,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,4,8,12,16,20), array(2,6,10,14,18));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($genero);
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

$graph->title->Set("Canciones alojadas ordenadas por género");

// Display the graph
$graph->Stroke();
?>