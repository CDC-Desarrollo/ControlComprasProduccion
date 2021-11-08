<?php

 include_once "conexion.php";


 $res = $conexion->query("select * from prealertas where id='$id'");

?>