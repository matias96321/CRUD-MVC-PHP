<?php
include "conexao.php";

session_start();

if(isset($_GET['deletar']))
{
    $id = $_GET['deletar'];
    mysqli_query($link,"DELETE FROM cliente WHERE id = $id") or die(mysql_error());
    
}


$_SESSION['message'] = "Dado foi deletado!";
$_SESSION['msg_type'] = "danger";

header("location: deletar_cliente.php");


?>