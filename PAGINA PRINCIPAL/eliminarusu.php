<?php
session_start();
include_once('conexion.php');

if (isset($_GET['id'])) {
    $database = new Connection();
    $db = $database->open();

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE idusuarios = :Id";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(array(':id' => $id));

        $_SESSION['message'] = 'Usuario eliminado correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al eliminar usuario: ' . $e->getMessage();
    }

    // Redirige a la página de listar usuarios después de eliminar
    header('location: listarusuarios.php');
    exit();
} else {
    // Si no se proporciona el ID, muestra un mensaje de error y redirige
    $_SESSION['message'] = 'ID de usuario no proporcionado';
    header('location: listarusuarios.php');
    exit();
}
?>
