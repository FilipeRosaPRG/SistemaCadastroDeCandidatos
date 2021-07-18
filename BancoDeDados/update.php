<?php 
session_start();
include_once 'conexao.php';

    $id = $_SESSION['id'];
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

$queryUpdate = $link->query("UPDATE tb_candidatos SET nome='$nome', email='$email', telefone ='$telefone', resumoEntrevista='$resumoEntrevista', logradouro='$logradouro', bairro='$bairro' ,numeroRua='$numeroRua', complemento='$complemento', cidade='$cidade', estado='$estado', cep='$cep' WHERE id='$id' ");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    header("Location:../consultas.php");
endif;

?>