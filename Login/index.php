<?php
include 'banco.php';
include 'login.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();



$login = new Login($banco);
//$login->seila($_GET['nome'],$_GET['senha']);
$login->seila($_POST['nome'],$_POST['senha']);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


	
<h1></h1>
<form method="post" action="index.php">
    <label>Login:</label><input name="nome" type="text" /><br /><br />
    <label>Senha:</label><input name="senha" type="text" /><br /><br />
    <input type="submit" />
</form>

</body>
</html>