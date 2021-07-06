<?php 

include "php/conexionDB.php";


$nombre=$_POST["name"];
$correo=$_POST["email"];
$mensaje=$_POST["message"];


 $insertar = "INSERT INTO contacto(nombre,email,mensaje) VALUES ('$nombre','$correo','$mensaje')";

    $metodo = mysqli_query($conex,$insertar);
 if(!$metodo){
        echo "NO SE PUDO INSERTAR";
    }else{
      
           header("Location:index.html");

    }


 ?>