<?php
    /*
        Este ejemplo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados usando el método 
        PDO::FETCH_OBJ, que devuelve objetos anónimos con nombres de propiedades que se corresponden con el nombre 
        de los campos en la tabla.
    */



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
    $sentencia->setFetchMode(PDO::FETCH_OBJ);
    $resultado = $sentencia->execute();
    
    // $Fila ahora es un objeto cuyos atributos son los nombres de los campos en la tabla de la BBDD    
    while($fila = $sentencia->fetch()){
        echo "ID: " .$fila->IdPasajero."<br>";
        echo "Nombre: " .$fila->Nombre."<br>";
        echo "Apellidos: " .$fila->Apellidos."<br>";
        echo "Edad: " .$fila->Edad."<br>";
        echo "IdVuelo: " .$fila->IdVuelo."<br>";
        echo "<br>";
    }


?>