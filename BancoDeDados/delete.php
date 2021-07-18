<?php 
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $link->query("DELETE FROM tb_candidatos WHERE id='$id'");

if(mysqli_affected_rows($link) > 0):
    header("Location:../consultas.php");
endif



?>