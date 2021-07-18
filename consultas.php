<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/menu.php' ?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr>


    <table class="striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sobre a Entrevista</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>CEP</th>
                <th>Complemento</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once 'BancoDeDados/read.php';
            ?>    
        </tbody>
    </table>
    <hr>
    </div>
   
</div>


<!--
<form method="POST">

      <form class="col s12">
        <div class="row">
          <div class="input-field col s2">
            <input id="pesquisarNome" name="nome" type="text" data-length="10">
            <label for="pesquisarNome">Pesquisar Candidato</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light orange" type="submit" name="pesquisaUser">Pesquisar
                <i class="material-icons right">search</i>
            </button>
</form>
-->
<?php 
include_once 'BancoDeDados/conexao.php';


$pesquisaUser = filter_input(INPUT_POST, 'pesquisaUser', FILTER_SANITIZE_STRING);
if($pesquisaUser):
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $result_usuario = "SELECT*FROM tb_candidatos WHERE nome LIKE '%$nome%";
    $resultados = mysqli_query($link, $result_usuario );
    while($row_usuario = mysqli_fetch_assoc($resultados)){
        echo "ID:" . $row_usuario['id'];
    }

endif;
?>




<?php include_once 'includes/footer.php' ?>