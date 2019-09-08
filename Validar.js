//funcion para validar el registro
function validar(){
  var datosCorrectos=true;
  var error="";
  if(document.getElementById("NOMBRE").value==""){
    alert("error nombre no valido");
    datosCorrectos=false;
  }else{
    if(document.getElementById("APELLIDO").value==""){
      datosCorrectos=false;
      alert("error apellido no valido");;
    }else{
      if(document.getElementById("CORREO").value==""){
        datosCorrectos=false;
        alert("error correo no valido");;
      }else{
        if(document.getElementById("USUARIO").value==""){
          datosCorrectos=false;
          alert("error usuario no valido");;
        }else{
          if(document.getElementById("CONTRASEÑA").value==""){
            datosCorrectos=false;
            alert("error contraseña no valida");;
          }else{
            if(document.getElementById("CARGO").value=="" || document.getElementById("CARGO").value=="administrador" || document.getElementById("CARGO").value=="empleado"){
              datosCorrectos=false;
              alert("error Cargo no valido");;
            }
          }
        }
      }
    }
  }

  if(!datosCorrectos){
    alert('No se puede continuar con el registro');
  }else{
    alert('registro exitoso');
  }
  return datosCorrectos;
}

//funcion para validar empleados
function validarEmpleado()
{
  var datosCorrectos=true;
  var error="";
  if(document.getElementById("USUARIO").value==""){
    alert("error USUARIO no valido");
    datosCorrectos=false;
  }else{
    if(document.getElementById("CONTRASEÑA").value==""){
      alert("error contraseña no valida");
      datosCorrectos=false;
    }
  }
  if(!datosCorrectos){
    alert('No se puede continuar');
  }else{
    alert('Bienvenido');
  }
  return datosCorrectos;
}

//funcion para validar administrador
function validarAdministrador()
{
  var datosCorrectos=true;
  var error="";
  if(document.getElementById("USUARIO").value==""){
    alert("error USUARIO no valido");
    datosCorrectos=false;
  }else{
    if(document.getElementById("CONTRASEÑA").value==""){
      alert("error contraseña no valida");
      datosCorrectos=false;
    }
  }
  if(!datosCorrectos){
    alert('No se puede continuar');
  }else{
    alert('Bienvenido');
  }
  return datosCorrectos;
}
