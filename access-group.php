<?php
include_once("config.php");

    if($_POST){
        if(isset($_POST['saveGroup'])) {
            if(empty($nomeGrupo)) {
                echo "<font color='red'>O campo Nome Grupo não pode ser vazio</font><br/>";
            }
            die("Não consegui prosseguir daqui");
                $nomeGrupo = $_POST['nameGroup'];
                $permCadastra = $_POST['cadastraPessoa'];
                $permEdita = $_POST['editaPessoa'];
                $permExclui = $_POST['excluiPessoa'];

                $result = mysqli_query($mysqli , "INSERT INTO grupo(name,cadastra,edita,exclui) VALUES('$nomeGrupo','$permCadastra','$permEdita','$permExlui')");
        
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Grupo de Usuário</title>
</head>
<body>
    <a href="index.php">Voltar</a><br/><br/>
    
    <form method="post" name="formAccessGroup">
        <table width="20%" border="0">
            <tr>
                <td>Nome Grupo</td>
                <td><input type="text" name="nameGroup"></td>                
            </tr>
            <tr>
                <td>Cadastrar Pessoa</td>
                <td>
                    <select name="cadastraPessoa">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Editar Pessoa</td>
                <td>
                    <select name="editaPessoa">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Excluir Pessoa</td>
                <td>
                    <select name="excluiPessoa">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="saveGroup" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>