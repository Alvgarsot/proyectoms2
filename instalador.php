<?php
  session_start();
  include_once("./configuracion_bd.php");
unset($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="librerias/jquery-2.2.0.min.js"></script>
    <script src="./librerias/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script rel="stylesheet" href="./librerias/jquery-ui-1.11.4.custom/jquery-ui.css"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilos/general.css">
      <link href='https://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <?php
         if (isset($db_user)) {
              header("Location: ./login.php");
         }
        
    ?>
      <div class="cabecera"><div id="cabecera1">
          <img src="./img/headphones2.png"><p>Proyecto de Implantación Alvaro Garrido Soto -PROYECTOMS-</p></div><div id="cabecera2"><p>Formulario de instalación de la aplicación</p></div>
      </div>
      
      <div class="creaform2">
          <div class="formcab">Instalador:</div>
          <div class="formcont">
        <form method="post">
        
            <p>Usuario BD:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input name="bduser" type="text" required></p>
            <p>Contraseña: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input name="bdpass" type="password"></p>
            <p>Host: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input name="bdhost" type="text" required></p>
            <p>Base de datos: &nbsp &nbsp &nbsp &nbsp &nbsp <input name="bdname" type="text" required></p><br>
            <select name="opcion" required>
            <option value="llena" selected>Base de datos con datos dentro</option>
            <option value="vacia">Base de datos vacía</option>
            </select>
            <p><input type="submit" value="Enviar"></p>

        </form>
        </div>
      </div>
<?php
if(isset($_POST["bduser"])){
		$bdusuario=$_POST["bduser"];
		$bdcontrasena=$_POST["bdpass"];
		$bdnombre=$_POST["bdname"];
		$bd_host=$_POST["bdhost"];
		$bdopcion=$_POST["opcion"];
		$connection = new mysqli($bd_host, $bdusuario, $bdcontrasena, $bdnombre);
		if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
		}else{ if($bdopcion == 'llena'){
                  include("completa.php");
                }else{
                  include("vacia.php");
                }
      			$file = fopen("./configuracion_bd.php","a");
			fwrite($file, "<?php"."\n");
			fwrite($file, "if (isset("."$"."_ENV['OPENSHIFT_APP_NAME'])) {"."\n");
			fwrite($file, ""."$"."db_user="."$"."_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];"."\n");
			fwrite($file, ""."$"."db_host="."$"."_ENV['OPENSHIFT_MYSQL_DB_HOST'];"."\n");
			fwrite($file, "$"."db_name="."'".$bdnombre."';"."\n");
			fwrite($file, ""."$"."db_password="."$"."_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];"."\n");
			fwrite($file, "}"."\n");  
          	fwrite($file, "else{"."\n");
			fwrite($file, "$"."db_user="."'".$bdusuario."';"."\n");
          	fwrite($file, "$"."db_password="."'".$bdcontrasena."';"."\n");
          	fwrite($file, "$"."db_host="."'".$bd_host."';"."\n");
          	fwrite($file, "$"."db_name="."'".$bdnombre."';"."\n");
			fwrite($file, "}"."\n");  
          	fwrite($file, "?>"."\n");
          	fclose($file);
			unlink('./instalador.php');
			unlink('./completa.php');
			unlink('./vacia.php');
			header('Location:login.php');
		}
}
?>
      <div class="pie"><p>Introduzca los datos necesarios para la correcta instalación del proyecto. El usuario de la base de datos y la propia base de datos han de estar previamente creados en el sistema.</p></div>
  </body>
</html>