<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Campeon</title>
</head>
<body>
    <h2>Insertar Campeon</h2>

    <form method="POST" action="../Controlador/ControlaInserta.php">

    <label>Nombre:</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <br>

    <label>Rol:</label>
    <input type="text" name="Rol" id="Rol">
    <br>
    <br>

    <label>Dificultad:</label>
    <input type="text" name="Dificultad" id="Dificultad">
    <br>
    <br>

    <label>Descripcion:</label>
    <input type="text" name="Descripcion" id="Descripcion">
    <br>
    <br>

    <input type="submit" value="Insertar">
    </form>
</body>
</html>