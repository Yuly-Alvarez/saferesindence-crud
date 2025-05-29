<?php
include('connection.php');

$con = connection();

$id = $_POST['id_user'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$passUser = $_POST['passUser'];


$sql = "UPDATE usuarios SET nombre='$name', apellido='$lastName', telefono='$phone', direccion='$address', usuario='$username', passUser='$passUser' WHERE id_user='$id'";

$query = mysqli_query($con, $sql);

if($query){
    header('Location: index.php');
}
?>