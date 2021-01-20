<?php
include_once("config.php");

    if($_POST){
        if(isset($_POST['saveGroup'])) {
            $nomeGrupo = $_POST['nameGroup'];
            $permCadastra = $_POST['cadastraPessoa'];
            $permEdita = $_POST['editaPessoa'];
            $permExclui = $_POST['excluiPessoa'];

            if(empty($nomeGrupo)) {
                echo "<font color='red'>O campo Nome Grupo não pode ser vazio</font><br/>";
            } else {
                $SQL="INSERT INTO grupo(name,cadastra,edita,exclui) VALUES('$nomeGrupo','$permCadastra','$permEdita','$permExclui')";
                $result = mysqli_query($mysqli, $SQL);
                echo "<font color='green'>Grupo cadastrado com sucesso</font><br/>";
                echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
                die;
            }
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