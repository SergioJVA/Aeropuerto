<?php
    //EJEMPLO PARA INSERTAR UNA CONSULTA PREPARADA CON ?
    include_once 'Conexion.php';
    $conexion = Conexion::obtenerConexion();

    //ESTOS SON LOS DATOS QUE SUPONEMOS QUE HEMOS COGIDO DE UN FORMULARIO
    $Nombre = "Carmen";
    $Apellidos = "Bujalance";
    $Edad = "25";
    $IdVuelo = "1";

    // Paso 1: Montar la SQL colocando una ? en cada valor
    $sqlInsert = "INSERT INTO pasajero (Nombre,Apellidos,Edad,IdVuelo) VALUES (?,?,?,?)";

    // Paso 2: Preparar la consulta SQL para su ejecucion
    $sentencia = $conexion ->prepare($sqlInsert);

    // Paso 3: Vinculamos los parámetros de la consulta preparada con los valores de las variables correspondientes
    $sentencia->bindParam(1,$Nombre,PDO::PARAM_STR);
    $sentencia->bindParam(2,$Apellidos,PDO::PARAM_STR);
    $sentencia->bindParam(3,$Edad,PDO::PARAM_INT);
    $sentencia->bindParam(4,$IdVuelo,PDO::PARAM_INT);


    // Paso 4: Ejecutar la consulta preparada
    $resultado = $sentencia->execute();
    
    if ($resultado){
        echo " <br /> Registro insertado correctamente";  
    }
    else {
        echo "<br />Error al insertar el registro";
    }
?>