<html>
<head>
	<title>Cadastro de Pessoa</title>
</head>

<body>
<?php
//Incluindo arquivo de conexão do BD
include_once("config.php");
include_once("functions.php");

//var_dump($_POST);
//die;

if(isset($_POST['Submit'])) {

	$isValid = validarCampos($_POST['name'],$_POST['age'],$_POST['telefone'],$_POST['email']);


	if($isValid == true) {
		// Se todos os campos forem preenchidos (sem campos vazios) 
		
		//Insere dados no BD
	
		$name = $_POST['name'];
		$age = $_POST['age'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		
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
