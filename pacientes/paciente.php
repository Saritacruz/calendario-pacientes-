<?php
include('../config/config.php'); /* LLAMAMOS CONFIG DE URLS */
include('../config/database.php'); /* CONEXION A LA BD */


class paciente{
    public $conexion; /* LLAMO LA CONEXION DE MI BASE DE DATOS */

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombres= $params['nombres'];
        $apellidos= $params['apellidos'];
        $cedula = $params['cedula'];
        $celular = $params['celular'];
        $edad = $params['edad'];
        $motivo = $params['motivo'];
        $email = $params['email'];
        $residencia = $params['residencia'];
        $sexo = $params['sexo'];
        $estadocivil = $params['estadocivil'];
        $patologia = $params['patologia'];

        $insert= "INSERT INTO pacientes VALUES (NULL, '$nombres', '$apellidos', '$cedula', '$celular', '$edad', '$motivo', '$email', '$residencia', '$sexo','$estadocivil', '$patologia')"; /* INSERTAR EN LA TABLA LOS SIGUIENTES VALORES */

        return mysqli_query($this->conexion, $insert); /* ENVIAR A LA BD TODO LO QUE ESTE DENTRO DE INSERT */

    }

   function getAll(){
        $basededatos= "SELECT * FROM pacientes"; 
        return mysqli_query($this->conexion, $basededatos);
    }

    function getOne($id){
        $sql = "SELECT * FROM pacientes WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
      }


      function update($params){
        $nombres= $params['nombres'];
        $apellidos= $params['apellidos'];
        $cedula = $params['cedula'];
        $celular = $params['celular'];
        $edad = $params['edad'];
        $motivo = $params['motivo'];
        $email = $params['email'];
        $residencia = $params['residencia'];
        $sexo = $params['sexo'];
        $estadocivil = $params['estadocivil'];
        $patologia = $params['patologia'];
        $id = $params['id'];
  
        $update = " UPDATE pacientes SET nombres='$nombres', apellidos='$apellidos', cedula='$cedula', celular='$celular', edad='$edad', motivo='$motivo', email='$email', residencia='$residencia', sexo='$sexo', estadocivil='$estadocivil', patologia='$patologia' WHERE id = $id";
        return mysqli_query($this->conexion, $update);
      }

      function delete($id){
        $eliminar= "DELETE FROM pacientes WHERE id = $id"; 
        return mysqli_query($this->conexion, $eliminar);
    }

    
   
  
  
 
}



?>