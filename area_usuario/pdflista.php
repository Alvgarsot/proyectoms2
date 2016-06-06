<?php
  session_start();
if (!isset($_SESSION["usuario"])) {
              header("Location: ../login.php");
         }
require('../librerias/fpdf/fpdf.php');
require('../configuracion_bd.php');
$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($result = $connection->query("SELECT nombre_lista FROM lista WHERE id_lista='".$_GET['id']."';")) {
              if ($result->num_rows===0) {
            
              } else {
               while($obj2 = $result->fetch_object()) {
                   $lista=$obj2->nombre_lista;
               }
                  
	 }
              }
            else {
            echo "Wrong Query";
            var_dump($result);
          }
$pdf = new FPDF('Landscape','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('arial', '', 10);
$pdf->Image('../img/headphones.png' , 10 ,13, 28 , 28,'PNG');
$pdf -> SetX(50);
$pdf->Cell(150, 10, utf8_decode("Lista de reproducción ").$lista." de ".$_SESSION["usuario"],1);
$pdf->Ln(5);

$pdf->SetFont('helvetica', '', 9);
$pdf->Ln(5);
$pdf->SetFont('HELVETICA', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 10,'' , 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, utf8_decode('Nº'),1);
$pdf->Cell(57, 8, utf8_decode('Nombre de canción'),1);
$pdf->Cell(27, 8, utf8_decode('Año de salida'),1);
$pdf->Cell(35, 8, 'Autor',1);
$pdf->Cell(35, 8, utf8_decode('Álbum'),1);
$pdf->Cell(30, 8, utf8_decode('Género'),1);
$pdf->Cell(27, 8, utf8_decode('Duración'),1);
$pdf->Ln(8);
$pdf->SetFont('Arial');
if ($result = $connection->query("SELECT * FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 AND nombre_usuario='".$_SESSION['usuario']."' AND id_lista='".$_GET['id']."' ORDER BY num_cancion asc;")) {
              if ($result->num_rows===0) {
                echo "NO TIENE PLAN ASIGNADO";
              } else {
               $i=0;
                  
                  
                  while($obj = $result->fetch_object()) {
					 $orden[$i]=$obj->num_cancion;
                     $nombre[$i]=substr($obj->nombre_cancion, 0, -4);
                     $ano[$i]=$obj->anio_salida;
                      $album[$i]=$obj->album;
                     $genero[$i]=$obj->genero;
                     $autor[$i]=$obj->autor;
                     $duracion[$i]=$obj->duracion;
	$pdf->Cell(15, 8,$orden[$i],1);
	$pdf->Cell(57, 8,$nombre[$i],1);
	$pdf->Cell(27, 8, $ano[$i],1);
	$pdf->Cell(35, 8,$autor[$i],1);
    $pdf->Cell(35, 8,$album[$i],1);
	$pdf->Cell(30, 8,$genero[$i],1);
	$pdf->Cell(27, 8,$duracion[$i],1);
	$pdf->Ln(8);
	$i++;
					  
	 }
              }
          }  else {
            echo "Wrong Query";
            var_dump($result);
          }
	$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(170, 20, date('d-m-Y').'');
$pdf->Output();
?>