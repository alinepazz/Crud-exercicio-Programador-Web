<?php
require "inc/logica-alunos.php";
if(isset($_POST['cadastrar']) ){
	$nome = $_POST['nome'];
	$primeira = $_POST['primeira'];
	$segunda = $_POST['segunda'];

	inserirNovoAluno($conexao, $nome, $primeira, $segunda);
	require "inc/desconecta.php";
	header("location:visualizar.php");
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>
	<form action="#" method="post">
	    <p><label for="nome">Nome:</label><br>
	    <input type="text" name="nome" id="nome" required></p>
        
        <p><label for="primeira">Primeira nota:</label><br>
	    <input type="number" name="primeira" id="primeira" step="0.01" min="0.00" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label><br>
	    <input type="number" name="segunda" id="segunda" step="0.01" min="0.00" max="10" required></p>
	    
        <p><button name="cadastrar">Cadastrar aluno</button></p>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>