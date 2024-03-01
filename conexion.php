<?php
$dbHosts = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "newsutc";
$conn = mysqli_connect($dbHosts,$dbUser,$dbPass,$dbName);
if(!$conn)
{
    //esto marca tu error si no conside la informacion
    ("NO HAY CONEXION" .mysqli_connect());
}
