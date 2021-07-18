<?php session_start(); 

if(!isset($_SESSION['cadastro'])){
    if(isset($_POST['acao'])){
        $login   = 'admin';
        $senha   = 'admin';

        $loginForm   = $_POST['login'];
        $senhaForm   = $_POST['senha'];

        if($usuario == $usuarioForm && $senha == $senhaForm){
            //Sucesso
            $_SESSION['login'] = true;
            header('Location: cadastro.php');
        }else{
            //erro
            echo "Dados Invalidos";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Iniciar sessão</title>
    <meta charset="utf-8">
    <link rel="sortcut icon" href="imagens/Croweicon.png" type="image/x-icon" />
    <!--Font/Icon do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--CSS materialize-->
     <link rel="stylesheet" href="materialize\css\materialize.min.css">

    <nav class="orange ">
      <div class="nav-wrapper container">
          <div class="brand-logo light">Sistema de Candidatos</div>
      </div>
  </nav>

  <div class="row container">
    <p>&nbsp</p>
   <center><img id="logoTopo" src="imagens/LOGO_Crowe.png"  width="240"></center>
    <p>&nbsp</p>

<form action="" method="POST" class="col s12">
  <fieldset class="formulario">
  <h5 class="light center">Iniciar sessão</h5>

    <!--Campo login-->
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input  type="text" name="login" maxlenght="40"  required autofocus>
        <label for="login"> Login </label>
     </div>

    <!--Campo senha-->
    <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input  type="password" name="senha"  maxlenght="40"  required>
        <label for="senha"> Senha </label>
    </div>

    <!-- Botões -->
    <div class="input-field col s12">
        <input type="submit" name="acao" value="Entrar" class="btn orange">
        <input type="reset" value="limpar" class="btn red">
    </div>

  </fieldset> 
</form>


</div>  

    <?php include_once 'includes/footer.php'  ?>
    </head>
<body>