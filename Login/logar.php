<?php
include 'banco.php';
include 'login.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();



$login = new Login($banco);
//$login->seila($_GET['nome'],$_GET['senha']);
$login->seila($_POST['nome'],$_POST['senha']);


?>
