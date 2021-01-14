<html>
<head>
	<title>Cadastro de Pessoa</title>
</head>

<body>
<?php
//Incluindo arquivo de conexão do BD
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);
		
	//Verificando campos vazios
	if(empty($name) || empty($age) || empty($email) || empty($telefone)) {
				
		if(empty($name)) {
			echo "<font color='red'>O campo nome está vazio</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>O campo idade está vazio</font><br/>";
		}

		if(empty($telefone)) {
			echo "<font color='red'>O campo telefone está vazio</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>O campo e-mail está vazio</font><br/>";
		}
		
		//Link para voltar a página
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// Se todos os campos forem preenchidos (sem campos vazios) 
			
		//Insere dados no BD	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,telefone) VALUES('$name','$age','$email','$telefone')");
		
		//Mostra mensagem de sucesso
		echo "<font color='green'>Cadastro realizado";
		echo "<br/><a href='index.php'>Ver cadastros</a>";
	}
}
?>
</body>
</html>
