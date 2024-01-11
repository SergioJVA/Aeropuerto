<?php
    //EJEMPLO PARA INSERTAR UNA CONSULTA PREPARADA CON ?
    include_once 'Conexion.php';
    $conexion = Conexion::obtenerConexion();


    $sqlInsert = "SELECT * FROM pasajero";

    $sentencia = $conexion ->prepare($sqlInsert);

    // Para leer necesito elegir el tipo de dato que queremos como salida
    // Para ello hay varias constantes que determinan los distintos tipos:
    // - PDO::ASOC: Me devuelve un array indexado por los nombres de las columnas
    // - PDO::NUM: Me devuelve un array indexado por el numero de columna
    // - PDO::BOTH: Valor por defecto. Devuelve un array indexado por columnas y por numeros
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $sentencia->execute();

    while($fila = $sentencia->fetch()){
        echo "<br />ID: " .$fila["IdPasajero"];
        echo "<br />Nombre: " .$fila["Nombre"];
        echo "<br />Apellidos: " .$fila["Apellidos"];
        echo "<br />Edad: " .$fila["Edad"];
        echo "<br />IdVuelo: " .$fila["IdVuelo"];
    }




// FETCH ALL



    //EJEMPLO PARA INSERTAR UNA CONSULTA PREPARADA CON ?
    include_once 'Conexion.php';
    $conexion = Conexion::obtenerConexion();


    $sqlInsert = "SELECT * FROM pasajero";

    $sentencia = $conexion ->prepare($sqlInsert);

    // Para leer necesito elegir el tipo de dato que queremos como salida
    // Para ello hay varias constantes que determinan los distintos tipos:
    // - PDO::ASOC: Me devuelve un array indexado por los nombres de las columnas
    // - PDO::NUM: Me devuelve un array indexado por el numero de columna
    // - PDO::BOTH: Valor por defecto. Devuelve un array indexado por columnas y por numeros
    $sentencia->setFetchMode(PDO::FETCH_NUM);
    $resultado = $sentencia->execute();
    $datos = $sentencia->fetchAll();

    foreach($datos as $fila){
        echo "<br />ID: " .$fila[0];
        echo "<br />Nombre: " .$fila[1];
        echo "<br />Apellidos: " .$fila[2];
        echo "<br />Edad: " .$fila[3];
        echo "<br />IdVuelo: " .$fila[4];
    }

?>