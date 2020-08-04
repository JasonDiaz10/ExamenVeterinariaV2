<?php
  require_once './basedatos/conexion.php';
  
  //listar los productos
  function listarCita(){    
      $clientes = array();
      $sql = "SELECT * FROM CLIENTES ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($cliente = mysqli_fetch_assoc($resultado)){
          array_push($clientes, $cliente);
      } 
      
      return $clientes;
  }
  //registar un cliente
  function registrarCita($id,$nombre,$mascota,$raza,$edad,$fecha,$observacion){
      
      $sql = "INSERT INTO CLIENTES VALUES('$id','$nombre','$mascota','$raza','$edad','$fecha','$observacion')";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }
   //eliminar un cliente 
  function eliminarCitaNombre($id,$nombre){
      $sql = "DELETE FROM CLIENTES WHERE NOMBRE = '$id',$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Buscar cliente por nombre
  function buscarCita($nombre){
      $sql = "SELECT * FROM CLIENTES WHERE NOMBRE = '$nombre'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $cliente = mysqli_fetch_assoc($resultado);
       
       return $cliente;
  }

  //modificar un cliente
  function modificarCita($id,$nombre,$mascota,$raza,$fecha,$observacion){
      $sql = "UPDATE CLIENTES SET ID='$id',MASCOTA='$mascota',RAZA='$raza',EDAD='$edad',FECHA'$fecha',OBSERVACION='$observacion'WHERENOMBRE='$nombre'";
      $sql = "UPDATE CLIENTES SET ID='$id',MASCOTA='$mascota',RAZA='$raza',EDAD='$edad',FECHA'$fecha',OBSERVACION='$observacion'WHERENOMBRE='$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
