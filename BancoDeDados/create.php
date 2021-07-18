<?php
session_start();
include_once 'conexao.php';

$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$resumoEntrevista = $_POST['resumoEntrevista'];
$logradouro       = $_POST['logradouro'];
$bairro           = $_POST['bairro'];
$numeroRua        = $_POST['numeroRua'];
$complemento      = $_POST['complemento'];
$cidade           = $_POST['cidade'];
$estado           = $_POST['estado'];
$cep              = $_POST['cep'];

$querySelect  = $link->query("SELECT email FROM tb_candidatos");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails, $emails_existentes);
endwhile;

if(in_array($email, $array_emails)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um candidato com esse email!'."</p>";
    header("Location: ../cadastro.php");
else:
    $queryInsert = $link->query("INSERT INTO tb_candidatos VALUES(default, '$nome','$email', '$telefone', '$resumoEntrevista', '$logradouro', '$bairro', '$numeroRua', '$complemento', '$cidade', '$estado', '$cep')");
    $affected_rows =  mysqli_affected_rows($link);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."</p>";
        header("Location: ../cadastro.php");
    endif;    
endif;