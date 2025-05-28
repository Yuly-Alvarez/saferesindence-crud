<?php
include('connection.php');

$con = connection();

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$passUser = $_POST['passUser'];
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios(nombre, apellido, telefono, direccion, usuario, passUser, id_rol) VALUES('$name', '$lastName', '$phone', '$address', '$username', '$passUser', '$rol')";

$query = mysqli_query($con, $sql);

if($query){
    header('Location: index.php');
}
?>