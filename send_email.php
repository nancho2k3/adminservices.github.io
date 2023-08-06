<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $motivo = $_POST["motivo"];

    $to = "nancho2k3@gmail.com";
    $subject = "Nueva consulta de $nombre $apellido";
    $message = "Nombre: $nombre $apellido\nEmail: $email\nTeléfono: $telefono\nMotivo: $motivo";

    mail($to, $subject, $message);

    echo "success"; // Respuesta para el script JavaScript
}
?>
