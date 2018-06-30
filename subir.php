<?php
Echo "Iniciando proceso de transferencia de archivo</br>";
Echo "INSERT INTO usuarios (id_usuario, nombre_usuario, foto) VALUES (NULL, 'Kenya', 'kenya_pack.jpg')";

//conexion a bd
$servername="localhost";
$username = "root";
$password = "";
$database = "examen_2";

$conexion=mysqli_connect($servername,$username,$password,$database);

$nombre_viajero= $_POST["nombre_viajero"];
	$fecha_viaje=$_POST["fecha_viaje"];
//iniciar con la transferencia de archivo
//1.validar si se presioni un submit con un metodo post en el formulario



if(isset($_POST["submit"])){
    echo "</br> Se presiono con un boton submit con metodo POST </br>";
//$_FILES REQUIERE el nombre en el campo del formulario y requiere de un nombre temporal mientras el archivo esta en 
    //transito
    $archivoOrigen= $_FILES["fileToUpload"]["tmp_name"];
    $archivoDestino="images/".$_FILES["fileToUpload"]["name"];
    echo "El archivo a enviar es : ".$archivoDestino."<br>";
    
    //parte 2
    $imageFiletype = pathinfo ($archivoDestino, PATHINFO_EXTENSION);
	$check = gettype ($archivoOrigen ); 
	ECHO "Extensión del archivo: ".$imageFiletype."</BR>";
	$excel = "gif";
	if ($imageFiletype == $excel){
	if ($check!==false){
	echo "el archivo es un excel compita :v </br>";
        
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $query="INSERT INTO viajeros (id_viajero, nombre_viajero,fecha_viaje,url_boleto_avion) values (null,'$nombre_viajero','$fecha_viaje','$archivoDestino')";
        echo "query a ejecutar: ".$query."<br>";
        
        if($query_a_ejecutar=mysqli_query($conexion,$query)){
            echo "query ejecutando correctamente</br>";
            header("refresh:5; url=formulario.php");
        }else {
            echo "query no ejecutado </br>";
        }
    }else{
            echo "el archivo no es una imagen </br>";
        }
}
}

?>