<?php
include 'banco.php';
include 'agenda.php';

$banco = new Banco('localhost','root','','william');
$banco->conexao();


$agenda = new Agenda($banco);
$valores = $agenda->listar("");



?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>

</head>

<body>
	<h2>Agenda</h2>
	<table border='1' cellpadding='0' cellspacing='0'>
    <tr>
    	<th>Nome:</th><th>Email</th><th>Telefone</th><th>Celular</th><th bgcolor="#ccc"></th><th bgcolor="#ccc"></th>
    </tr>
	<?php foreach ($valores as $value) {
        echo '<tr>
				<td>'.$value['nome'].' '.$value['sobrenome'].'</td><td>'.$value['email'].'</td><td>'.$value['telefone'].'</td><td>'.$value['celular'].'</td><td bgcolor="#ccc"><a href="excluir.php?id='.$value['id'].'" onclick="return confirm('."'Certeza?'".');">Excluir</a></td><td bgcolor="#ccc"><a href="editar.php?id='.$value['id'].'">Editar</a></td>
			</tr>';
    }
    ?>
	</table>
    
    
	<h2>Cadastro</h2>
    <form method="post" action="inserir.php">
    	
        <label>Nome: </label><input type="text" name="nome" /><br /><br />
        <label>Sobrenome: </label><input type="text" name="sobrenome" /><br /><br />
        <label>Email: </label><input type="text" name="email" /><br /><br />
        <label>Telefone: </label><input type="text" name="telefone" /><br /><br />
        <label>Celular: </label><input type="text" name="celular" /><br /><br />
      	
		<input type="submit" />
	</form>
    
    
    
    
    
    
    
    
    
    
</body>
</html>













<!--
<p>Host: <?#php #echo $banco->getHost(); ?></p>
<p>Usuario: <?#php #echo $banco->getUser(); ?></p>
<p>Banco: <?#php #echo $banco->getBanco(); ?></p>

<#?php foreach ($valores as $value) {
	var_dump($value);
	die;
}
?>
-->
