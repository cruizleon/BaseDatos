<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'proyecto_x'
);
 if (isset($conn)){ 
     echo 'Bien perro!!! conectado!!!';
 }
?>
