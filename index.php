<?php
//Incluindo arquivo de conexão do BD
include_once("config.php");

//Buscando dados em ordem decrescente (última entrada primeiro)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Página Inicial</title>
</head>

<body>
<a href="add.html">Cadastrar Pessoa</a><br/>
<a href="access-group.php">Cadastrar Grupo</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>ID</td>
		<td>Nome</td>
		<td>Grupo Acesso</td>
		<td>Idade</td>
		<td>Telefone</td>
		<td>E-mail</td>
		<td>Atualizar</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>Grupo1";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['telefone']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Você tem certeza que deseja excluir?')\">Deletar</a></td>";		
	}
	?>
	</table>
</body>
</html>
