<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">    
    <link rel="stylesheet" href="../lib/css/estilo2.css">  
    <title>Document</title>
    
</head>
<body>


<section class="menu">
         


        <div class="div1"></div>
    
        <div class="div2">

            
           

               <div class="divF"><img src="../img/fieb.png" alt=""></div>

               <div class="divTitulo"><h1>Cadastre-se aqui</h1></div>

               <form action="../controller/cadastrar.php" method="POST">
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
               
               <div class="divm1"><input type="text" class="form-control" name="nome" placeholder="Nome completo"></div>    

               <div class="divm1"><input type="email" class="form-control" name="email"  placeholder="@email"></div> 

               <div class="divm1"><input type="text" class="form-control" name="telefone" placeholder="telefone : (11) 1111-1111"></div>        

               <div class="divm1"><input type="text" class="form-control" name="curso"  placeholder="Curso"></div>

               <div class="divm1"><select name="Inst" class="form-control">
                <option  id="abc" value="Senai Dendezeiros">Senai Dendezeiros</option> 
                <option  id="abc" value="Senai Cimatec" selected>Senai Cimatec</option>
                <option  id="abc" value="Senai Cetind">Senai Cetind</option>
                </select></div>

               <div class="divm2"><button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button></div>
               
               <div class="divm2"><a href="index.php" class="btn btn-dark btn-lg btn-block">Voltar</a></div>
               </form>
            

        </div>
        
        <div class="div3"></div>
        
  
</section>


</body>
</html>