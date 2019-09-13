<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>



      <!-- ADD TASK FORM --><br><br>
      <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="ingresar.html" method="POST">
                <input type="submit" class="btn btn-primary btn-block" name="ingresar" value="Ingresar">
            </form><br>
            <form action="registrarse.php" method="POST">
                <input type="submit" class="btn btn-primary btn-block" name="registrarse" value="Registrarse">
            </form>
      </div>
      </div>


<?php include('includes/footer.php'); ?>
