<?php
  if($_POST){
    echo "cadastrar";
    // INCLUIR NO ARQUIVO DE CONEXÃO
    include "includes/conexao.php"
    // CAPTURAR OS DADOS DO POST
    $nome = $_POST ['nome'];
    $telefone = $_POST['email'];
    $email = $_POST ['cpf'];

    //CRIAR P SQL
    $sql = "INSERT INTO clientes VALUES
    (default, '{$nome}','{$telefone}','{$email}','{$cpf}')";

    echo $sql;
  }

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
  <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">Cpf</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md">
    
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
   </div>  

<?php include "includes/footer.php"; ?>