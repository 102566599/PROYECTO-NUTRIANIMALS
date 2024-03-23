<?php
session_start();
include_once('conexion.php');


if (!isset($_GET['Id'])) {
    $_SESSION['message'] = 'ID de usuario no proporcionado';

}


$Id = $_GET['Id'];


$database = new Connection();
$db = $database->open();


$sql = "SELECT * FROM usuarios WHERE idusuarios = :Id";
$stmt = $db->prepare($sql);
$stmt->execute(array(':Id' => $id));
$user = $stmt->fetch();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $fecha_registro = $_POST['fecha_registro'];
    $numero_documento = $_POST['numero_documento'];
    $tipo_documento = $_POST['tipo_documento'];

 
    $sql_update = "UPDATE usuarios SET Nombres = :nombres, Apellidos = :apellidos, Correo_Electronico = :correo, 
                   Fecha_registro = :fecha_registro, Numero_docuemnto = :numero_documento, Tipo_documento = :tipo_documento 
                   WHERE idusuarios = :Id";

    try {
        $stmt = $db->prepare($sql_update);
        $stmt->execute(array(':nombres' => $nombres, ':apellidos' => $apellidos, ':correo' => $correo, 
                             ':fecha_registro' => $fecha_registro, ':numero_documento' => $numero_documento, 
                             ':tipo_documento' => $tipo_documento, ':Id' => $Id));

        $_SESSION['message'] = 'Usuario modificado correctamente';
        header('location: index.php');
        exit();
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al modificar usuario: ' . $e->getMessage();
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Editar Usuario</h2>
        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $user['Nombres']; ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $user['Apellidos']; ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $user['Correo_Electronico']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $user['Fecha_registro']; ?>" required>
            </div>
            <div class="form-group">
                <label for="numero_documento">Número de Documento:</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="<?php echo $user['Numero_docuemnto']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tipo_documento">Tipo de Documento:</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" value="<?php echo $user['Tipo_documento']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>