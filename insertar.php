<?php
//en el ["es igual que en el name="]
include("conexion.php");

$ID = $_POST["ID"];
$nombre_coche = $_POST["nombre_coche"];
$puntuacion = $_POST["puntuacion"];
$universidad = $_POST["universidad"];



//registro para la pagina
if(isset($_POST["btnregistrar"])){
    //aqui es igual que en la BD
    $sqlgrabar = "INSERT INTO participantes(ID, nombre_coche, puntuacion, universidad) values('$ID', '$nombre_coche', '$puntuacion', '$universidad')";
    if(mysqli_query($conn,$sqlgrabar)){
        echo"<script> alert('Participante registrado con exito'); window.location='grafico.php'</script>";
    }else{
        
        $ID = $ID;
        echo" Error: " .$sqlgrabar."<br>" .mysqli_error($conn);
        "<script> alert('Este numero de participante ya esta en uso, por favor escoje otro'); window.location='registrarparticipantes.html'</script>";
    }
}
