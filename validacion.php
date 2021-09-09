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
    $query = "INSERT INTO ventas (imagen,ubicacion,descripcion,precio) VALUES ('$imagen','$ubicacion','$descripcion','$precio')";
    $conexion = conecta();
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        header("location:index.php");
    } else {
        echo "No se inserto";
    }
}



// if(isset($_POST["submit"])){
//     $check = getimagesize($_FILES["image"]["tmp_name"]);
//     if($check !== false){
//         $image = $_FILES['image']['tmp_name'];
//         $imgContent = addslashes(file_get_contents($image));
//          //DB details
//          $dbHost     = 'localhost';
//          $dbUsername = 'root';
//          $dbPassword = '';
//          $dbName     = 'ventas';
         
//          //Create connection and select DB
//          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
         
//          // Check connection
//          if($db->connect_error){
//              die("Connection failed: " . $db->connect_error);
//          }
   
        
//         //Insert image content into database
//         $insert = $db->query("INSERT into images (image) VALUES ('$imgContent')");
//         if($insert){
//             echo "File uploaded successfully.";
//         }else{
//             echo "File upload failed, please try again.";
//         } 
//     }else{
//         echo "Please select an image file to upload.";
//     }
// }
