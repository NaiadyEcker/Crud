<?php
// including the database connection file
include_once("config.php");
include_once("functions.php");

if(isset($_POST['update'])) {	
	
	$isValid = validarCampos($_POST['name'],$_POST['age'],$_POST['telefone'],$_POST['email']);

	if($isValid == true) {
		// Se todos os campos forem preenchidos (sem campos vazios) 
		//updating the table

		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];

		$result = mysqli_query($mysqli, "UPDATE users SET name='$name', age='$age', email='$email', telefone='$telefone' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
		
	}
}

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$telefone = $res['telefone'];
}
?>
<html>
<head>	
	<title>Editar</title>
</head>

<body>
	<a href="index.php">Página inicial</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><input type="text" name="telefone" value="<?php echo $telefone;?>"></td>
			</tr>
			<tr> 
				<td>E-mail</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Atualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>