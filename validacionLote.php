<?php


if (isset($_POST['ubicacion'])) {
    $ubicacion = $_POST['ubicacion'];
    $ubicacionOK = true;
} else {
    $ubicacionOK = false;
}

if (isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
    $descripcionOK = true;
} else {
    $descripcionOK = false;
}

if (isset($_POST['precio'])) {
    $precio = $_POST['precio'];
    $precioOK = true;
} else {
    $precioOK = false;
}
$imagen = addslashes(file_get_contents($_FILES['image']['tmp_name']));


if ($descripcionOK && $ubicacionOK && $precioOK) {
    insertar($imagen, $ubicacion, $descripcion, $precio);
}


function insertar($imagen, $ubicacion, $descripcion, $precio)
{
    include("conexion/conexion.php");
    $query = "INSERT INTO lotes (imagen,ubicacion,descripcion,precio) VALUES ('$imagen','$ubicacion','$descripcion','$precio')";
    $conexion = conecta();
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        header("location:lotes.php");
    } else {
        echo "No se inserto";
    }
}



