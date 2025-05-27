<?php
include('connection.php');

$con = connection();

$sql = "SELECT usuarios.*, roles.rol AS nombre_rol FROM usuarios
INNER JOIN roles ON usuarios.id_rol = roles.id_rol";
$query = mysqli_query($con, $sql);

$sqlRol = "SELECT * FROM roles";
$queryRol = mysqli_query($con, $sqlRol);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Residence</title>
</head>
<body>
    <div>
        <h1>Registro usuarios</h1>
        <form action="">
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Nombre">
            <label for="name">Apellido</label>
            <input type="text" name="lastName" placeholder="Apellido">
            <label for="name">Teléfono</label>
            <input type="number" name="phone" placeholder="Teléfono">
            <label for="name">Dirección</label>
            <input type="text" name="address" placeholder="Dirección">
            <label for="name">Usuario</label>
            <input type="text" name="username" placeholder="Usuario">
            <label for="name">Contraseña</label>
            <input type="password" name="passUser" placeholder="Contraseña">
            <label for="name">Rol</label>
            <select name="rol" id="rol">
                <?php while($rowRol = mysqli_fetch_assoc($queryRol)): ?>
                <option value="rol"><?= $rowRol['rol']?></option>
                <?php endwhile; ?>
            </select>
            
            <input type="submit" value="Registrar">
        </form>
    </div>
    <div>
        <h1>Usuarios</h1>
        <table>
            <thead>
                <tr>
                    <tb>ID</tb>
                    <tb>Nombre</tb>
                    <tb>Apellido</tb>
                    <tb>Teléfono</tb>
                    <tb>Dirección</tb>
                    <tb>Usuario</tb>
                    <tb>Contraseña</tb>
                    <tb>Rol</tb>
                    <tb>Editar</tb>
                    <tb>Eliminar</tb>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id_user'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['apellido'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                    <td><?= $row['direccion'] ?></td>
                    <td><?= $row['usuario'] ?></td>
                    <td><?= $row['passUser'] ?></td>
                    <td><?= $row['nombre_rol'] ?></td>
                    <td><a href="">Editar</a></td>
                    <td><a href="">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>