<?php session_start() ?>

<!DOCTYPE html>
<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/menu.php' ?>


  <!--Formulario de cadastro-->
  <div class="row container">
    <p>&nbsp</p>
   <center><img id="logoTopo" src="imagens/LOGO_Crowe.png"  width="240"></center>
    <p>&nbsp</p>
    
    
    <form action="BancoDeDados/create.php" method="POST" method="GET" action="." class="col s12">
      <fieldset class="formulario">
        <!--<legend><img src="imagens/avatarIcon.png" alt="[imagem]" width="100"></legend>-->
        <h5 class="light center">Cadastro dos candidatos</h5>

        <?php 
          if(isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            session_unset();
          endif;
        
        ?>

          <!--Campo nome-->
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input  type="text" name="nome" id="nome" maxlenght="40"  required autofocus>
            <label for="nome"> Nome do Candidato </label>
          </div>

                    <!--Campo email-->
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input  type="email" name="email" id="email" maxlenght="40"  required>
            <label for="Email"> Email </label>
          </div>

                    <!--Campo telefone-->
          <div class="input-field col s12">
            <i class="material-icons prefix">call</i>
            <input  type="tel" name="telefone" id="telefone" maxlenght="30"  required autofocus>
            <label for="telefone"> Telefone </label>
          </div>

                 <!--Campo Resumo da entrevista-->
           <div class="input-field col s12">
            <i class="material-icons prefix">comment</i>
            <input  type= "text" name="resumoEntrevista"  maxlenght="500"  required autofocus>
            <label for="resumoEntrevista"> Como foi a entrevista? </label>
          </div>
        
                    <!--Campo CEP-->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="cep" id="cep" value="" maxlenght="20" onblur="pesquisacep(this.value);"  required autofocus>
            <label for="cep"> CEP da residência </label>
          </div>

            <!--Campo logradouro/rua -->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="logradouro" id="logradouro" maxlenght="20"   required autofocus>
            <label for="logradouro"> Rua </label>
          </div>

                    <!--Campo bairro-->
              <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="bairro" id="bairro"  maxlenght="20"  required autofocus>
            <label for="bairro"> Bairro </label>
          </div>


                    <!--Campo número da rua -->
          <div class="input-field col s6">
            <i class="material-icons prefix">looks_3</i>
            <input  type="text" name="numeroRua" id="numeroRua" maxlenght="20"  required autofocus>
            <label for="numeroRua"> Número da residência </label>
          </div>

                    <!--Campo Complemento -->
          <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input  type="text" name="complemento" id="complemento" maxlenght="50" >
            <label for="complemento"> Complemento </label>
          </div>

                 <!--Campo Cidade -->
          <div class="input-field col s6">
            <i class="material-icons prefix">gps_fixed</i>
            <input  type="text" name="cidade" id="cidade" maxlenght="50"  required autofocus>
            <label for="cidade"> Cidade </label>
          </div>

                <!--Campo Estado-->
           <div class="input-field col s6">
            <i class="material-icons prefix">location_on</i>
            <input  type="text" name="estado" id="uf" maxlenght="50"  required autofocus>
            <label for="estado"> Estado </label>
          </div>

          <div class="input-field col s12">
            <input type="submit" value="cadastrar" class="btn orange">
            <input type="reset" value="limpar" class="btn red">
          </div>
      </fieldset>
    </form>
  </div>


    
<?php include_once 'includes/footer.php'  ?>