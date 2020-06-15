<?php

include "../models/conexao.php";

$sql = "SELECT * FROM cliente;";

$result = mysqli_query($link,$sql) or die ("Não foi possível selecionar os dados"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">    
    <link rel="stylesheet" href="../lib/css/estilo3.css">  
    <title>Document</title>
</head>
<body>



    <section class="menu">
         
        
        <div class="div1"></div>
     
        <div class="div2">
 
            <div class="divF"><img src="../img/fieb.png" alt=""></div>
 
            <<form method="get" action="">
    
        
            <div class="divTitulo"><h1>DELETAR CLIENTES</h1></div>

            <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Curso</th>
                <th scope="col">Instituição</th>
                <th scope="col">Ação</th>
                
                </tr>
            </thead>
            <tbody> 
            
                <?php while ($row = $result->fetch_assoc()): ?>
                
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telefone']; ?></td>
                    <td><?php echo $row['curso']; ?></td>
                    <td><?php echo $row['instituicao']; ?></td>
                    <td><a href="../controller/controllerDeletar.php?deletar=<?php echo $row['id']; ?>" class="btn btn-danger" >Deletar</a></tr>
                    
                <?php endwhile;?>
                
            </tbody>
                
            </table>      

            <div class="form-group ">
                <a href="index.php" class="btn btn-dark">Voltar</a>
            </div>  
     
        </form>

        <?php 
    session_start();  
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>    
<?php endif?>          
            
                    
        </div>
                
        <div class="div3"></div>
        
    </section>

</body>
</html>