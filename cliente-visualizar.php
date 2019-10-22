<?php

   include "includes/conexao.php";

   $id = $_GET['id'];
   $sql = "SELECT * FROM cliente WHERE pk_cliente ={$id}";
   $lista = $conn->query($sql);
   $cliente = $lista->fetch_assoc();

?>

<?php include "includes/header.php"; ?>

    
<div class="container">
  <h1>CADASTRO DE CLIENTES</h1>

<form class="form-horizontal" method="post" action="cliente-novo.php">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['nome'];?>" id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['telefone'];?>" id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['email'];?>" id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">Cpf</label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['cpf'];?>" id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>
   <div>
      <?php if(isset($msg)) echo $msg; // se existir $msg , imprima?> 
   </div>   
   </div>     
    
<?php include "includes/footer.php"; ?>
   

