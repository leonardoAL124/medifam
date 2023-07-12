<?php
    include 'conexion.php';
    $cedula = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $especialidad = $_POST['especialidad'];
    $horario = $_POST['horario'];

    $consulta = "INSERT into agendar_citas(ci, nombre, apellido, correo, telefono, especialidad, hora) values('$cedula', '$nombre', '$apellido', '$email', '$telefono', '$especialidad', '$horario')";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script>alert('Registro exitoso');
                window.location='/Proyecto_AL/index.html';
            </script>";
    }else{
        alert("Registro fallido");
    }
?>