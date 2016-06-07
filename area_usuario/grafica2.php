<?php
session_start();
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph_bar.php');

require('../configuracion_bd.php');
$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
$consulta="SELECT count(id_cancion) as veces, nombre_lista FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 AND nombre_usuario='".$_SESSION['usuario']."' GROUP BY id_lista";
 $result=$connection->query($consulta);
while($obj=$result->fetch_object()){
				 $veces[]=$obj->veces;
                $nombre[]=$obj->nombre_lista;
                }



// Create the graph. These two calls are always required
$graph = new Graph(600,350,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,10,20,30,40,50), array(5,15,25,35,45));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($nombre);
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

$graph->title->Set("Gráfica de volumen de canciones por lista de reproducción(Barras)");

// Display the graph
$graph->Stroke();
?>