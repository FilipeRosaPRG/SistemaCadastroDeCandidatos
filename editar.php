<?php 
session_start();
include_once 'includes/header.php'; 
include_once 'includes/menu.php'; 

?>


<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php 
    include_once 'BancoDeDados/conexao.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("SELECT*FROM tb_candidatos WHERE id='$id'");

    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $nome             = $registros['nome'];
        $email            =  $registros['email'];
        $telefone         =  $registros['telefone'];
        $resumoEntrevista =  $registros['resumoEntrevista'];
        $logradouro       =  $registros['logradouro'];
        $bairro           =  $registros['bairro'];
        $numeroRua        =  $registros['numeroRua'];
        $complemento      =  $registros['complemento'];
        $cidade           =  $registros['cidade'];
        $estado           =  $registros['estado'];
        $cep              =  $registros['cep'];  

    endwhile;
?>

 <!--Formulario de cadastro-->
 <div class="row container">
    <p>&nbsp</p>
   <center><img id="logoTopo" src="imagens/LOGO_Crowe.png"  width="240"></center>
    <p>&nbsp</p>
    
    
    <form action="BancoDeDados/update.php" method="POST" class="col s12">
      <fieldset class="formulario">
        <!--<legend><img src="imagens/avatarIcon.png" alt="[imagem]" width="100"></legend>-->
        <h5 class="light center">Alteração</h5>

        <?php 
          if(isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            session_unset();
          endif;
        
        ?>

          <!--Campo nome-->
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input  type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlenght="40"  required autofocus>
            <label for="nome"> Nome do Candidato </label>
          </div>

                    <!--Campo email-->
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input  type="email" name="email" id="email" value="<?php echo $email ?>" maxlenght="40"  required>
            <label for="Email"> Email </label>
          </div>

                    <!--Campo telefone-->
          <div class="input-field col s12">
            <i class="material-icons prefix">call</i>
            <input  type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlenght="30"  required autofocus>
            <label for="telefone"> Telefone </label>
          </div>

                 <!--Campo Resumo da entrevista-->
           <div class="input-field col s12">
            <i class="material-icons prefix">comment</i>
            <input  type= "text" name="resumoEntrevista" value="<?php echo $resumoEntrevista ?>"  maxlenght="500"  >
            <label for="resumoEntrevista"> Como foi a entrevista? </label>
          </div>
        
                    <!--Campo CEP-->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="cep" id="cep" value="<?php echo $cep ?>" maxlenght="20"  required autofocus>
            <label for="cep"> CEP da residência </label>
          </div>

            <!--Campo logradouro/rua -->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="logradouro" id="logradouro" value="<?php echo $logradouro ?>" maxlenght="20"  required autofocus>
            <label for="logradouro"> Rua </label>
          </div>

                  <!--Campo bairro-->
                <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="bairro" id="bairro" value="<?php echo $bairro ?>" maxlenght="20"  required autofocus>
            <label for="bairro"> Bairro </label>
          </div>

                    <!--Campo número da rua -->
          <div class="input-field col s6">
            <i class="material-icons prefix">looks_3</i>
            <input  type="text" name="numeroRua" id="numeroRua" value="<?php echo $numeroRua ?>" maxlenght="20"  required autofocus>
            <label for="numeroRua"> Número da residência </label>
          </div>

                    <!--Campo Complemento -->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="complemento" id="complemento" value="<?php echo $complemento ?>" maxlenght="50" >
            <label for="complemento"> Complemento </label>
          </div>

                 <!--Campo Cidade -->
          <div class="input-field col s6">
            <i class="material-icons prefix">language</i>
            <input  type="text" name="cidade" id="cidade" value="<?php echo $cidade ?>" maxlenght="50"  required autofocus>
            <label for="complemento"> Cidade </label>
          </div>

                <!--Campo Estado-->
           <div class="input-field col s6">
            <i class="material-icons prefix">location_on</i>
            <input  type="text" name="estado" id="estado" value="<?php echo $estado ?>" maxlenght="50"  required autofocus>
            <label for="complemento"> Estado </label>
          </div>

          <div class="input-field col s12">
            <input type="submit" value="alterar" class="btn orange">
            <a href="consultas.php" class="btn red"> Cancelar </a>
          </div>
      </fieldset>
    </form>
  </div>



<?php include_once 'includes/footer.php' ?>