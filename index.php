<?php
include('connection.php');

$con = connection();

$sql = "SELECT usuarios.*, roles.rol AS nombre_rol FROM usuarios
INNER JOIN roles ON usuarios.id_rol = roles.id_rol ORDER BY usuarios.id_user ASC";
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
        <form action="insert.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Nombre">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastName" placeholder="Apellido">
            <label for="phone">Teléfono</label>
            <input type="number" name="phone" placeholder="Teléfono">
            <label for="address">Dirección</label>
            <input type="text" name="address" placeholder="Dirección">
            <label for="username">Usuario</label>
            <input type="text" name="username" placeholder="Usuario">
            <label for="passUser">Contraseña</label>
            <input type="password" name="passUser" placeholder="Contraseña">
            <label for="rol">Rol</label>
            <select name="rol" id="rol">
                <?php while($rowRol = mysqli_fetch_assoc($queryRol)): ?>
                <option value="<?= $rowRol['id_rol']?>"><?= $rowRol['rol']?></option>
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
                    <td><a href="update.php?id_user=<?= $row['id_user'] ?>">Editar</a></td>
                    <td><a href="">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>