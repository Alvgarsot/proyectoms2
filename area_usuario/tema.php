<?php
session_start();
if ($_GET['tema']==="original") {
unset($_SESSION["tema"]);
    $_SESSION["tema"]=array("cabecera","pie","liscab","liscont","listausu","cancab","cancont","editarlista","editn","editc","editc2","cuerpazo","cancont2");
}
if ($_GET['tema']==="oscuro") {
unset($_SESSION["tema"]);
 $_SESSION["tema"]=array("cabecera2","pie2","liscab2","liscont2","listausu2","cancab2","cancontalt","editarlista2","editn2","editc_2","editc2_2","cuerpazo2","cancont2_2");
}
if ($_GET['tema']==="veraniego") {
unset($_SESSION["tema"]);
 $_SESSION["tema"]=array("cabecera3","pie3","liscab3","liscont3","listausu3","cancab3","cancontalt2","editarlista3","editn3","editc_3","editc2_3","cuerpazo3","cancont2_3");
}



header("location: usuario.php");
?>