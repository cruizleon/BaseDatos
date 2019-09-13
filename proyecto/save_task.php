<?php

include('conexion.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contraseña'];
  $cargo = $_POST['cargo'];
  $query = "INSERT INTO entrar(nombre, apellido, correo, usuario, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$usuario')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("paila perro");
  }

}

?>
