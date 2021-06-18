<?php

include 'Database/Db.php';
$dui=$_POST["dui"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$tipo=$_POST["tipo"];
$canti=$_POST["canti"];
$feInicio=$_POST["feInicio"];
$feEntrega=$_POST["feEntrega"];
$detalle=$_POST["detalle"];
$precio=$_POST["precio"];

$conn = mysqli_connect('localhost','root','','base_zapateria');
$insertar = "INSERT INTO cliente (DUI,Nombres,Apellidos,Telefono) VALUES ('$dui','$nombre','$apellido','$telefono')"; 
$resultado=mysqli_query($conn,$insertar);

$idCliente=mysqli_insert_id($conn);


$in="INSERT INTO reparacion (idCliente,Tipo_zapato,Cantidad,Detalle,Fecha_inicio,Fecha_entrega,precio) VALUES ('$idCliente','$tipo','$canti','$detalle','$feInicio','$feEntrega','$precio')";
$resul=mysqli_query($conn,$in);

if (!$resul) {
	echo "
	<script language = 'javascript'>
	alert('Falta llenar algun dato')
	window.location='home.php'
	</script>";
	exit();
	
}else{
	echo "
	<script language = 'javascript'>
	alert('Datos guardados con exito')
	window.location='home.php'
	</script>";
	exit();; 
}
mysqli_close($conn);