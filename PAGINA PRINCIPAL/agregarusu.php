<?php
session_start();
include_once('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Connection();
    $db = $database->open();

    
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $fecha_registro = $_POST['fecha_registro'];
    $numero_documento = $_POST['numero_documento'];
    $tipo_documento = $_POST['tipo_documento'];

  
    $sql = "INSERT INTO usuarios (Nombres, Apellidos, Correo_Electronico, Fecha_registro, Numero_docuemnto, Tipo_documento) 
            VALUES (:nombres, :apellidos, :correo, :fecha_registro, :numero_documento, :tipo_documento)";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(array(':nombres' => $nombres, ':apellidos' => $apellidos, ':correo' => $correo, 
                             ':fecha_registro' => $fecha_registro, ':numero_documento' => $numero_documento, 
                             ':tipo_documento' => $tipo_documento));

        $_SESSION['message'] = 'Usuario creado correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al crear usuario: ' . $e->getMessage();
    }

   
    header('location: listarusuarios.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Crear Usuario</h2>
        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
        <?php } ?>
        <form method="POST">
        <div class="form-group">
                <label for="ID">Id:</label>
                <input type="text" class="form-control" id="Id" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
            </div>
            <div class="form-group">
                <label for="numero_documento">Número de Documento:</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
            </div>
            <div class="form-group">
                <label for="tipo_documento">Tipo de Documento:</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </form>
    </div>
</body>
</html>
