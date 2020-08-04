<?php

  require_once './basedatos/conexion.php';
 
    //Buscar usuario por correo y password
  function buscarUsuario($correo,$password){
      $sql = "SELECT * FROM USUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
  
  function registrarUsuario($cedula,$nombre,$telefono,$direccion,$estado,$rol,$correo,$password){
      
      $sql = "INSERT INTO  USUARIOS VALUES('$cedula','$nombre','$telefono','$direccion','$estado','$rol','$correo','$password')";
     $resultado = mysqli_query($GLOBALS['conexion'], $sql);
           
  }
  
?>