<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'proyecto_x'
) or die(mysqli_erro($mysqli));

?>