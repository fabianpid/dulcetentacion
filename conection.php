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

 $query = mysql_query($con,$sql);

 if ($query) {
    echo "usuario insertado correctamente";
 }else{
    echo "usuario no agregado";
 }
}
?>