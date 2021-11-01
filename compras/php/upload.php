<?php
require_once 'conexion.php';

if(isset($_FILES["exampleFormControlFile1"]))
{
    $id = $_POST["prealertaId"];
    $file = $_FILES["exampleFormControlFile1"];
    

    $file_name = $file["name"]; 

    $find = '.';

    $posicion = strpos($file_name, $find);

    $extension_archivo = substr($file_name,$posicion, strlen($file_name));

    $file["name"] = "prealerta_" . $id . $extension_archivo;
    $file_name  = $file["name"]; 


    $ruta_tmp = "uploads/". $file_name;

    //dirname(dirname(__FILE__)). "\uploads". "/" . $file_name ."<br />";
    echo $ruta_tmp;
    $conexion->query("insert into comprobantes(ruta, idPrealerta) values ('$ruta_tmp','$id') ");



    $file_type = $file["type"];
    //ruta donde se guardará
   // $file["tmp_name"] = "C:/xampp/htdocs/VSC PHP/FinalControlDeCompras1/images";
    //C:/xampp/htdocs/VSC PHP/FinalControlDeCompras1/images

    //var_dump($file);
    //die();

    $allowed_type = array("image/jpg", "image/jpeg", "image/png");

    if(in_array($file_type, $allowed_type))
    {
        //header("Location:../prealerta_detalle");
    }

    //Crear directorio
    if(!is_dir("uploads"))
    {
        mkdir("uploads", 0777);
    }

    move_uploaded_file($file["tmp_name"], "uploads/". $file_name);

    //Mover imagen a directorio
}
else
{
    //header("Location: ../prealerta_detalle");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="<?php echo $ruta_tmp; ?>" alt="nada" srcset="" width="150" height="150">
</body>
</html>