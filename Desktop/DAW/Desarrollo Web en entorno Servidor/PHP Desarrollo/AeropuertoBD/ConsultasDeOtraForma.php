<?php
    //EJEMPLO PARA INSERTAR UNA CONSULTA PREPARADA CON ?
    include_once 'Conexion.php';
    $conexion = Conexion::obtenerConexion();

    //ESTOS SON LOS DATOS QUE SUPONEMOS QUE HEMOS COGIDO DE UN FORMULARIO
    $Nombre = "Federico";
    $Apellidos = "Senda";
    $Edad = "46";
    $IdVuelo = "2";

    // Paso 1: Montar la SQL colocando una ? en cada valor
    $sqlInsert = "INSERT INTO pasajero (Nombre,Apellidos,Edad,IdVuelo) VALUES (:Nombre,:Apellidos,:Edad,:IdVuelo)";

    // Paso 2: Preparar la consulta SQL para su ejecucion
    $sentencia = $conexion ->prepare($sqlInsert);

    // Paso 3: Vinculamos los parámetros de la consulta preparada con los valores de las variables correspondientes
    $sentencia->bindParam(":Nombre",$Nombre);
    $sentencia->bindParam(":Apellidos",$Apellidos);
    $sentencia->bindParam(":Edad",$Edad);
    $sentencia->bindParam(":IdVuelo",$IdVuelo);


    // Paso 4: Ejecutar la consulta preparada
    $resultado = $sentencia->execute();
    
    if ($resultado){
        echo " <br /> Registro insertado correctamente";  
    }
    else {
        echo "<br />Error al insertar el registro";
    }
?>