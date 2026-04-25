<?php
 include("conexion.php");
 $cliente="";
 $postre="";
 $numero_contacto="";

 if (isset($_POST['enviar'])) {
    $cliente =($_POST['cliente']);
    $postre =($_POST['postre']);
    $numero_contacto =($_POST['correo']);
    $cantidad =($_POST['cantidad']);
    $mensaje =($_POST['mensaje']);

    $sql="INSERT INTO pedidos(cliente, postre, correo,cantidad,mensaje) VALUES ('$cliente', '$postre', '$correo','$cantidad','$mensaje')";

 if($query){
        echo "¡Éxito! Usuario insertado.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($con);
    }
}
?>