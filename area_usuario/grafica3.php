<?php 
session_start();
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('../librerias/jpgraph-3.5.0b1/src/jpgraph_pie.php');

require('../configuracion_bd.php');
$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
$consulta="SELECT count(id_cancion) as veces, nombre_lista FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 AND nombre_usuario='".$_SESSION['usuario']."' GROUP BY id_lista";
 $result=$connection->query($consulta);
while($obj=$result->fetch_object()){
				 $veces[]=$obj->veces;
                $nombre[]=$obj->nombre_lista;
                }
                


// Create the Pie Graph. 
$graph = new PieGraph(600,350);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Gráfica de volumen de canciones por lista de reproducción(Tarta)");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($veces);
$graph->Add($p1);
$p1->SetLabels($nombre);


$p1->ShowBorder();
$p1->SetColor('black');

$graph->Stroke();

?>
?>