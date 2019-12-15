<?php
require "inc/logica-alunos.php";
$id = $_GET['id'];
$aluno = lerUmAluno($conexao, $id);



if( isset($_POST['atualizar']) ){
    $nome = $_POST['nome'];
    $primeira= $_POST['primeira'];
    $segunda = $_POST['segunda'];
    atualizarAluno($conexao, $id, $nome, $primeira, $segunda);
    require "inc/desconecta.php";
    header("location:visualizar.php");
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?=$aluno['id']?>">
        
	    <p><label for="nome">Nome:</label><br>
	    <input type="text"  value="<?=$aluno['nome']?>" name="nome" id="nome" required></p>
        
        <p><label for="primeira">Primeira nota:</label><br>
	    <input name="primeira"  value="<?=$aluno['primeira']?>"type="number" id="primeira" step="0.01" min="0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label><br>
	    <input name="segunda"  value="<?=$aluno['segunda']?>" type="number" id="segunda" step="0.01" min="0" max="10" required></p>
	    
        <p><button name="atualizar">Atualizar dados do aluno</button></p>
	</form>    
    
    <hr>
    <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

</div>

</body>
</html>