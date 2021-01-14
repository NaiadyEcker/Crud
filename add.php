<html>
<head>
	<title>Cadastro de Pessoa</title>
</head>

<body>
<?php
//Incluindo arquivo de conexão do BD
include_once("config.php");
include_once("functions.php");

// var_dump(!is_int($_POST['age']));
// die;

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);

	$isValid = validarCampos($name,$age,$telefone,$email);

	if($isValid == true) {
		// Se todos os campos forem preenchidos (sem campos vazios) 
			
		//Insere dados no BD	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,telefone) VALUES('$name','$age','$email','$telefone')");
		
		//Mostra mensagem de sucesso
		echo "<font color='green'>Cadastro realizado";
		echo "<br/><a href='index.php'>Ver cadastros</a>";
	} else {

		//Link para voltar a página
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	}
			
}
?>
</body>
</html>
