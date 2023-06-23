<?php
require_once 'datoslogin.php';
try
{
    $conn= new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    echo "Conectado a la base de datos $dbname con exito. ";   
}catch(PDOException $pe)
{
die("No se pudo conectar a la base de datos.". $pe->getMessage());
}



?>