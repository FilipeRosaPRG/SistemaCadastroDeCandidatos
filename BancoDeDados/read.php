<?php

include_once 'conexao.php';

$querySelect = $link->query('SELECT * FROM tb_candidatos');
while($registros = $querySelect->fetch_assoc()):
    $id               = $registros['id'];
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


    echo "<tr>";
    echo " <td>$nome</td><td>$email</td><td>$telefone</td><td>$resumoEntrevista</td><td>$logradouro</td><td>$bairro</td><td>$numeroRua</td><td>$cep</td><td>$complemento</td><td>$cidade</td><td>$estado</td>
    <td><a href='editar.php?id=$id'><i class='material-icons orangeIcon'>edit</i></a></td>
    <td><a href='BancoDeDados/ConfirmDelete.php?id=$id'><i class='material-icons orangeIcon'>delete</i></a></td>";
    echo "</tr>";



endwhile;