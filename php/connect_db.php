<?php

$conexion = mysql_connect('localhost','root','');
mysql_select_db('academ', $conexion);


$con=mysqli_connect("localhost","root","","academ");

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}

?>