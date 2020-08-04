<?php
require_once './basedatos/usuarioConsulta.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');
              }else{
                  header('location:index.php');
              }
          break;   
          case 'Crear' :
              registrarUsuarios();
              
              break;
      }
  }

  
  function validarUsuario(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $usuario = buscarUsuario($correo,$password);          
    return $usuario;
  }
  function registrarUsuarios()
{  
    $cedula=$_POST['cedula'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    $estado=$_POST['estado'];
    $rol=@_POST['rol'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    
    registrarUsuario($cedula,$nombre,$telefono,$direccion,$estado,$rol,$correo,$password);
    
    
}

  
?>
