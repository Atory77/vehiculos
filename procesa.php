<?php
include_once 'conexion.php';
include_once 'Vehiculo.php';

//Comprobamos datos
if (isset($_POST['matricula'],
$_POST['marca'],
$_POST['modelo'],
$_POST['propietario']) &&
$_POST['matricula'] !== '' &&
$_POST['marca'] !== '' &&
$_POST['modelo'] !== '' &&
$_POST['propietario'] !== ''){
//Recogemos datos
$matricula = htmlspecialchars($_POST['matricula']);
$marca = htmlspecialchars($_POST['marca']);
$modelo = htmlspecialchars($_POST['modelo']);
$propietario =  htmlspecialchars($_POST['propietario']);

//Creamos el objeto
$vehiculo = new Vehiculo($matricula, $marca, $modelo, $propietario);

//Hacemos consulta en sql
$sql = "INSERT INTO vehiculos (matricula, marca, modelo, propietario)
        VALUES(:matricula, :marca, :modelo, :propietario)";   //Los dos puntos indican que el parametro de la consulta preparada
//Preparamos consulta con PDO
$consulta = $conexion->prepare($sql);

//Ejecutamos la consulta
$consulta->execute([
        ':matricula' => $matricula,
        ':marca' => $marca,
        ':modelo' => $modelo,
        ':propietario' => $propietario
]);

$vehiculo->mostrarInfo();
}

else {
        echo "Debes rellenar los datos del formulario";
}

echo "Gracias por usar la APP de Ninonino."

?>