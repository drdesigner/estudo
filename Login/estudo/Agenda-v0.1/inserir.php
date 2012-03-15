<?php
header("Location:index.php"); 
include 'banco.php';
include 'agenda.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();

$agenda = new Agenda($banco);
$agenda->inserir($_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['telefone'],$_POST['celular']);


?>