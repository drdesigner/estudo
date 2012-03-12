<?php
header("Location:index.php");
include 'banco.php';
include 'agenda.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();

$agenda = new Agenda($banco);
$agenda->apagar($_GET['id']);

//$xx = $_GET['id'];
//echo $xx; 

?>