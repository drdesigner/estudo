<?php
//header("Location:index.php");
include 'banco.php';
include 'agenda.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();


$id = "where id=".$_GET['id'];
$agenda = new Agenda($banco);
$valores = $agenda->listar($id);
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>

</head>

<body>
	<h2>Atualizar</h2>

<form method="post" action="update.php?id=<?php echo $_GET['id'] ?>">
	<?php foreach ($valores as $value) {
    echo "<label>Nome: </label><input type='text' name='nome' value='".$value['nome']."' /><br /><br />";
    echo "<label>Sobrenome: </label><input type='text' name='sobrenome' value='".$value['sobrenome']."' /><br /><br />";
    echo "<label>Email: </label><input type='text' name='email' value='".$value['email']."' /><br /><br />";
    echo "<label>Eelefone: </label><input type='text' name='telefone' value='".$value['telefone']."' /><br /><br />";
    echo "<label>Celular: </label><input type='text' name='celular' value='".$value['celular']."' /><br /><br />";
    }
    ?>
    <input type="submit" />
</form>

</body>
</html>