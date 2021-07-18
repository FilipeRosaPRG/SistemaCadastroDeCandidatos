<?php
include_once 'conexao.php';


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

echo 'Quer mesmo excluir esse candidato?';
echo "<a href = 'delete.php?id=$id'> Sim </a> | ";
echo "<a href = '../consultas.php'> Não </a>";




?>