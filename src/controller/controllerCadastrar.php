
<?php
include "../models/conexao.php";

session_start();


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];
$instituicao = $_POST['Inst'];


if(!$query = "INSERT INTO cliente(nome,email,telefone,curso,instituicao) values ('$nome','$email','$telefone','$curso','$instituicao')"){
     echo("Erro ao realizar cadastro");
}else{

    $_SESSION['message'] = "Dados cadastrados!";
    $_SESSION['msg_type'] = "success";
    header("location: ../views/menu_cadastro.php");


mysqli_query($link,$query);
}
?>