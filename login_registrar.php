<?php
//en el ["es igual que en el name="]
include("conexion.php");
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];

//login de la pagina
if(isset($_POST["btningresar"])){
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena='$pass'");
    $nr = mysqli_num_rows($query);
if($nr==1){
        echo"<script> alert('Bienvenido $usuario'); window.location='home.html'</script>";
    }else{
        echo"<script> alert('Usuario no existente'); window.location='iniciarsecion.html'</script>";
    }
}
//registro para la pagina
if(isset($_POST["btnregistrar"])){
    //aqui es igual que en la BD
    $sqlgrabar = "INSERT INTO usuarios(usuario, nombre, apellidos, contrasena, mail) values('$usuario','$nombre','$apellidos','$pass','$correo')";
    if(mysqli_query($conn,$sqlgrabar)){
        echo"<script> alert('Usuario registrado con exito: $usuario'); window.location='iniciarsecion.html'</script>";
    }else{
        echo" Error: " .$sqlgrabar."<br>" .mysqli_error($conn);

    }
}
