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
            <input type="text" name="Username" placeholder="Usuario">
            <label for="name">Contraseña</label>
            <input type="password" name="passUser" placeholder="Contraseña">
            <label for="name">Rol</label>
            <select name="rol" id="rol">
                <option value="Administrador">Administrador</option>
                <option value="Residente">Residente</option>
                <option value="Visitante">Visitante</option>
                <option value="Constratista">Contratista</option>
            </select>
            
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>