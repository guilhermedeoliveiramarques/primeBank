<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "prime";

$ligar = new mysqli($host, $usuario, $senha, $bd);

if(!$ligar)
{
    die ("A conexão falhou".mysqli_connect_error());
}
?>

