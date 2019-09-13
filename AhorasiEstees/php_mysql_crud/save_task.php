<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $cargo = $_POST['cargo'];
  $query = "INSERT INTO entrar(nombre, apellido, correo, usuario, contrasena, cargo) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena', '$cargo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta erronea");
  }

  header("Location: index.php");
}

?>
