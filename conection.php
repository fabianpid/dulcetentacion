<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
 include("conexion.php");
 $cliente="";
 $postre="";
 $numero_contacto="";

 if (isset($_POST['enviar'])) {
    $cliente =($_POST['cliente']);
    $postre =($_POST['postre']);
    $correo =($_POST['correo']);
    $cantidad =($_POST['cantidad']);
    $mensaje =($_POST['mensaje']);

    $sql="INSERT INTO pedidos(cliente, postre, correo,cantidad,mensaje) VALUES ('$cliente', '$postre', '$correo','$cantidad','$mensaje')";
$query = mysqli_query($con, $sql);

 if($query){
        echo "¡Éxito! Usuario insertado.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($con);
    }
}
?>