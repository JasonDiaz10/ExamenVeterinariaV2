<?php
  require_once './basedatos/clientesConsulta.php';   

  //Aqui­ entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'Crear':
            guardarCita();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:index.php");
            break;       
        case 'listar':
            listarCita();
            header("location:index.php");
            break;
        case 'eliminar':
            eliminarCita();
            header("location:index.php");
            break; 
    }
  }

  function guardarCita(){
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $mascota = $_POST['mascota'];
      $raza = $_POST['raza'];
      $edad = $_POST['edad'];
      $fecha = $_POST['fecha'];
      $observacion = $_POST['observacion'];

      registrarCita($id,$nombre,$mascota,$raza,$edad,$fecha,$observacion);
  }
  
  function eliminarCita(){
      $id = $_POST['id'];
      $nombre = $_GET['nombre'];
      
      eliminarCitaNombre($id,$nombre);
  }
  
  function actualizarCita(){
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $mascota = $_POST['mascota'];
      $raza = $_POST['raza'];
      $edad = $_POST['edad'];
      $fecha = $_POST['fecha'];
      $observacion = $_POST['observacion'];

      modificarCita($id,$nombre,$mascota,$raza,$edad,$fecha,$observacion);   
  }
  
?>