<?php


if(isset($_FILES["exampleFormControlFile1"]))
{
    $id = $_POST["prealertaId"];
    $file = $_FILES["exampleFormControlFile1"];
    

    $file_name = $file["name"]; 
    echo $file_name . "<br>";

    $find = '.';

    $posicion = strpos($file_name, $find);

    echo $posicion. "<br>";

    $extension_archivo = substr($file_name,$posicion, strlen($file_name));

    echo $extension_archivo . "<br>";

    $file["name"] = "prealerta_" . $id . $extension_archivo;
    $file_name  = $file["name"]; 


    echo dirname(dirname(__FILE__)). "uoloads/" . $file_name ."<br />";



    $file_type = $file["type"];
    //ruta donde se guardará
   // $file["tmp_name"] = "C:/xampp/htdocs/VSC PHP/FinalControlDeCompras1/images";
    //C:/xampp/htdocs/VSC PHP/FinalControlDeCompras1/images

    //var_dump($file);
    die();

    $allowed_type = array("image/jpg", "image/jpeg", "image/png");

    if(in_array($file_type, $allowed_type))
    {
        header("Location:../prealerta_detalle");
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
    header("Location:../prealerta_detalle");
}

?>