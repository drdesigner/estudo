<?php
header("Location:index.php"); 
include 'banco.php';
include 'agenda.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();

$teste = $_GET['id'];
echo $teste;

$agenda = new Agenda($banco);
$agenda->editar($_GET['id'],$_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['telefone'],$_POST['celular']);

?>