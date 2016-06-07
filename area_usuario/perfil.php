
<?php
  session_start();
  include("../configuracion_bd.php");
if (!isset($_SESSION["usuario"])) {
              header("Location: ../login.php");
         }
unset($_SESSION['id']);
// ----------------- PARA LA LISTA DE REPRODUCCION       -----------------------
                  if (isset($_GET['cancion'])) {
$connection3 = new mysqli($db_host, $db_user, $db_password, $db_name);
    $connection3->set_charset("utf8");
                      $r=0;
                      $j=0;
    $siguiente_cancion[0]="Sin canción....";
        if ($result3 = $connection3->query("SELECT nombre_cancion FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 AND num_cancion>(SELECT num_cancion FROM lista , usuario, forma, cancion WHERE lista.nombre_usuariofk=usuario.nombre_usuario AND lista.id_lista=forma.id_listafk AND cancion.id_cancion=forma.id_cancionfk2 AND nombre_cancion='".$_GET['cancion']."' AND nombre_usuario='".$_SESSION['usuario']."' AND id_lista='".$_GET['id']."') AND nombre_usuario='".$_SESSION['usuario']."' AND id_lista='".$_GET['id']."' ORDER BY num_cancion asc;")) {
              if ($result3->num_rows===0) {
              } else {
                   while($obj3 = $result3->fetch_object()) {
                     $siguiente_cancion[$r]=$obj3->nombre_cancion;
                       $r++;
                        
                 }
                  $result3->close();
                 unset($obj3);
                 }
              }
          }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../librerias/jquery-2.2.0.min.js"></script>
    <script src="../librerias/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script rel="stylesheet" href="../librerias/jquery-ui-1.11.4.custom/jquery-ui.css"></script>
    <title>PROYECTOMS</title>
    <link rel="stylesheet" type="text/css" href="../estilos/general.css">
      <link href='https://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>
  </head>
  <body class="<?php echo $_SESSION['tema'][11]; ?>" onLoad="setup();">

    <!--  ----------------------CABECERA---------------------- -->
      <div class="<?php echo $_SESSION['tema'][0]; ?>">
        <div id="cabecera1"><img src="../img/headphones.png"><p><?php echo "BIENVENIDO ".strtoupper($_SESSION["usuario"]);
           ?></p></div>
          <div id="cabecera2"><p><a href="cierre.php">Cerrar sesión</a><?php if($_SESSION['nivel']==0) { 
               echo "&nbsp &nbsp &nbsp <a href='administracion.php'>Ir a la zona de administración</a>";
           } ?>&nbsp&nbsp&nbsp <a href="usuario.php"> Volver</a></p></div>
      </div>
      
      <!-- --------------LISTAS---------------- -->
      <div class="listas">
          <div class="<?php echo $_SESSION['tema'][2]; ?>">Listas:</div>
          <div class="<?php echo $_SESSION['tema'][3]; ?>">
             <ul class="<?php echo $_SESSION['tema'][4]; ?>">
               <?php
        if (!isset($_SESSION["usuario"])) {
          header("location: ../login.php");
          }
             $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
$connection->set_charset("utf8");
        if ($result = $connection->query("SELECT * FROM lista join usuario on lista.nombre_usuariofk=usuario.nombre_usuario
            WHERE nombre_usuario='".$_SESSION['usuario']."';")) {
              if ($result->num_rows===0) {
                echo "<p>No tiene lista</p>";
              } else {
                 while($obj = $result->fetch_object()) {
                     echo "<li><a href='pdflista.php?id=$obj->id_lista'><img src='../img/pdf.png'></a> ".$obj->nombre_lista." <span class='fechacr'></span></li>";
                 }
                  $result->close();
                  unset($obj);
              }
          } else {
            echo "Consulta equivocada";    
          }
?>
              </ul>
        </div>
      </div>
      <!-- -----------------GRAFICA----------------- -->
      <div class="canciones">
          <div class="<?php echo $_SESSION['tema'][5]; ?>">Preferencias</div>
          <div class="<?php echo $_SESSION['tema'][6]; ?>"><img class="dashboard" src="grafica1.php"> <img class="dashboard" src="grafica3.php"> 
             <img class="dashboard" src="grafica2.php">
        </div>
      </div>
      <div class="temas">
          <div class="cabtema">Temas:</div>
        <div class="cabtema2">
          <li><a href="tema.php?tema=original">Original</a></li>
            <li><a href="tema.php?tema=oscuro">Oscuro</a></li>
            <li><a href="tema.php?tema=veraniego">Veraniego</a></li>
          </div>
      </div>
      <div class="<?php echo $_SESSION['tema'][1]; ?>"><p>Desde esta página puedes ver información sobre tu usuario y sobre las listas de reproducción que has creado</p></div>
  </body>
    <?php unset($connection); ?>
</html>