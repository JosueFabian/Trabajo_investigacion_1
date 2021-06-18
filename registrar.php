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

$insertar = "INSERT INTO cliente (DUI,Nombres,Apellidos,Telefono) VALUES ('$dui','$nombre','$apellido','$telefono')"; /*INSERT INTO reparacion (Tipo_zapato,Cantidad,Detalle,Fecha_inicio,Fecha_entrega,precio) VALUES ('$tipo','$canti','$feInicio','$feEntrega','$detalle','$precio')*/

$conn = mysqli_connect('localhost','root','','base_zapateria');
$resultado=mysqli_query($conn,$insertar);

/*if (!resultado) {
	echo 'Error';
}else{
	echo 'Usuario registrado'; 
}*/
mysqli_close($conn);