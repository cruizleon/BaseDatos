<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<br><br><br><br><br>
    <div class="col-md-4 mx-auto"> 
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div>
                    <p class="text-center">DATOS DEL REGISTRO</p>
                    NOMBRE<input type="text" name="nombre" class="form-control">
                    APELLIDO<input type="text" name="apellido" class="form-control">
                    CORREO ELECTRONICO<input type="text" name="correo" class="form-control">
                    USUARIO<input type="text" name="usuario" class="form-control">
                    CONTRASEÑA<input type="text" name="contrasena" class="form-control">
                    CARGO<select class="form-control" name="cargo">
                            <option  name="cargo" value="Administrador">Administrador</option>
                            <option name="cargo" value="Empleado">Empleado</option>
                            </select>
                    <br>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_task" value="Registrarse">
            </form><br>

<?php include('includes/footer.php'); ?>