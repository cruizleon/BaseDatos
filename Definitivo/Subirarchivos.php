<?php
include 'db.php';
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
      // creamos las variables para subir a la db
        $ruta = "upload/"; 
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
       
        $upload= $ruta . $nombrefinal;  



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                    
                    echo "<b>Upload exitoso!. Datos:</b><br>";  
                    echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                    echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                    echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                    echo "<br><hr><br>";  
                         


                   $nombre  = $_POST["nombre"]; 
                   $descripcion = $_POST["descripcion"]; 


                   $query = "INSERT INTO archivos(name,descripcion,ruta,tipo,size) 
    VALUES ('$nombre','$descripcion','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 

       
       echo "El archivo '".$nombre."' se ha subido con éxito <br>";       
        }  
    }  
 } 
?> 

<body> 
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
    Seleccione archivo: <input name="fichero" type="file" >  
    <br><br> Nombre: <input name="nombre" type="text" size="70" maxlength="70"> 
    <br><br> Descripcion: <input name="descripcion" type="text" size="100" maxlength="250"> 
    <br><br> 
  <input name="submit" type="submit" value="SUBIR ARCHIVO">   
</form>  
</body>