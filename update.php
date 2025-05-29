<?php
include('connection.php');

$con = connection();

$id = $_GET['id_user'];

$sql = "SELECT * FROM usuarios WHERE id_user='$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Actualizar usuario</h1>
        <form action="edit_user.php" method="post">
            <label for="id_user">ID</label>
            <input type="text" name="id_user" value="<?= $row['id_user'] ?>" readonly>
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastName" placeholder="Apellido" value="<?= $row['apellido'] ?>">
            <label for="phone">Teléfono</label>
            <input type="number" name="phone" placeholder="Teléfono" value="<?= $row['telefono'] ?>">
            <label for="address">Dirección</label>
            <input type="text" name="address" placeholder="Dirección" value="<?= $row['direccion'] ?>">
            <label for="username">Usuario</label>
            <input type="text" name="username" placeholder="Usuario" value="<?= $row['usuario'] ?>">
            <label for="passUser">Contraseña</label>
            <input type="password" name="passUser" placeholder="Contraseña" value="<?= $row['passUser'] ?>">
            
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>