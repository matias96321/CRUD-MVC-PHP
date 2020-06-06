

<?php
include "conexao.php";

session_start();

$nome = "";        
$email = "";        
$telefone = "";       
$curso = "";        
$insti = "";
$id=0;       

$atualizar = false;


    if(isset($_GET['id'])){
       $id = $_GET['id'];
       $atualizar = true; 
       $result = mysqli_query($link,"SELECT * FROM cliente WHERE id=$id")or die(mysqli_error);
        
        if(mysqli_num_rows($result)==1){ 

            $row = $result->fetch_array();
                       
            $nome = $row['nome'];
            $email = $row['email'];
            $telefone = $row['telefone'];
            $curso = $row['curso'];
            $insti = $row['instituicao'];
        }    
    }

    if(isset($_GET['atualizar'])){

       $id = $_GET['id']; 
       $nome = $_GET['nome'];
       $email = $_GET['email'];
       $telefone = $_GET['telefone'];
       $curso = $_GET['curso'];
       $insti = $_GET['insti'];
    
        mysqli_query($link,"UPDATE cliente SET nome= '$nome', email= '$email', telefone= '$telefone', curso= '$curso', instituicao= '$insti' WHERE id=$id");
       
        $_SESSION['message'] = "Registro atualizado";
        $_SESSION['msg_type'] = "warning";
        header("location: editar_cliente.php");

    }



?>



