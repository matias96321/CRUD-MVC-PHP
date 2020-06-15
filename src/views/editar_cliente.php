<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">    
    <script src="javaScript.js"></script>
    <link rel="stylesheet" href="../lib/css/estilo3.css">
</head>
<body>

<?php
include "../models/conexao.php";
include "../controller/controllerEditar.php";

$sql = "SELECT * FROM cliente;";
$result = mysqli_query($link,$sql) or die ("Não foi possível selecionar os dados"); 
?>


   


    <section class="menu">
         
        

        <div class="div1"></div>
     
        <div class="div2">
 
        <div class="divF"><img src="../img/fieb.png" alt=""></div>
 
        <form method="GET" action="../controller/editar.php">
    
    <div class="divTitulo"><h1>EDITAR REGISTRO</h1></div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Curso</th>
          <th scope="col">Instituição</th>
          <th scope="col" colspan="2" >Ação</th>
          
        </tr>
      </thead>
      <tbody>
      
        <?php while ($linha = $result->fetch_assoc()): ?>
        
          <tr>
            <td><?php echo $linha['id']; ?></td>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['email']; ?></td>
            <td><?php echo $linha['telefone']; ?></td>
            <td><?php echo $linha['curso']; ?></td>
            <td><?php echo $linha['instituicao']; ?></td>
            <td><a href="editar_cliente.php?id=<?php echo $linha['id']; ?>" class="btn btn-primary">Editar</a></tr>
            
          </tr>
        <?php endwhile;?>
      </tbody>
       
      <?php if($atualizar == true): ?>
      
      
      <td class="input">
        <input type="hidden" name="id" value="<?php echo $id ;?>">
      </td>
      <td class="input">
        <input type="text"   name="nome" class="form-control" value="<?php echo $nome  ;?>"  placeholder="nome">
      </td>    
       <td class="input">
       <input type="email"  name="email" class="form-control" value="<?php echo $email  ;?>"  placeholder="email" >
       </td>   
       <td class="input">
       <input type="text"  name="telefone" class="form-control" value="<?php echo $telefone  ;?>"  placeholder="telefone">
       </td>  
       <td class="input">
       <input type="text"  name="curso" class="form-control" value="<?php echo $curso  ;?>"  placeholder="curso">
       </td> 
       <td class="input">
       <select " id="select" name="insti" class="form-control">
       <option value="Senai Dendezeiros" >Senai Dendezeiros</option> 
              <option value="Senai Cimatec">Senai Cimatec</option>
              <option value="Senai Cetind">Senai Cetind</option>
              <option value="<?php echo $insti  ;?>" selected><?php echo $insti  ;?></option>
       </select> 
       </td> 
       <td class="input">
       <button type="submit" class="btn btn-info" name="atualizar">Atualizar</button>
       </td>   
       <?php endif;?>   
         

      </table>  
  
        <div class="form-group">
            <a href="index.php" class="btn btn-dark" >Voltar</a>
        </div>
        
        <?php       
        if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>    
        <?php endif?>
               


       </form>    
        
               
      </div>
         
         <div class="div3"></div>
   
  </section>

 

    
</body>
</html>