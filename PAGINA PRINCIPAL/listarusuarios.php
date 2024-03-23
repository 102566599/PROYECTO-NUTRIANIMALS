<?php
session_start();
include_once('conexion.php');


$database = new Connection();
$db = $database->open();


$sql = "SELECT * FROM usuarios";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Lista de Usuarios</h2>
        <a href="agregarusu.php" class="btn btn-primary mb-4">Agregar Usuario</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha de Registro</th>
                    <th>Número de Documento</th>
                    <th>Tipo de Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch()) : ?>
                    <tr>
                        <td><?php echo $row['Idusuarios']; ?></td>
                        <td><?php echo $row['Apellidos']; ?></td>
                        <td><?php echo $row['Nombres']; ?></td>
                        <td><?php echo $row['Correo_electronico']; ?></td>
                        <td><?php echo $row['fecha_registro']; ?></td>
                        <td><?php echo $row['Numero_documento']; ?></td>
                        <td><?php echo $row['Tipo_documento']; ?></td>
                        <td>
                            <a href="modifiusu.php?id=<?php echo $row['Idusuarios']; ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="eliminarusu.php?id=<?php echo $row['Idusuarios']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php

$database->close();
?>
