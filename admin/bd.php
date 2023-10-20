<?php 
$servidor="localhost";
$baseDeDatos="frangia.cl";
$usuario="root";
$contrasenia="1021245";
try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
   

}catch(Exception $error){
    echo $error->getMessage();
}


?>