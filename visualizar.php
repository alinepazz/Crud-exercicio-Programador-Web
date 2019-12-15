<?php
require "inc/logica-alunos.php";
$alunos = lerAlunos($conexao);
// echo "<pre>";
// var_dump($alunos);
// echo "</pre>";




?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>Lista de alunos</h1>
    <hr>
<?php foreach($alunos as $aluno) { ?>
    <section> 
        <p><b>Nome:</b> <?=$aluno['nome']?> 
            <a href="atualizar.php?id=<?=$aluno['id']?>">ATUALIZAR</a> |
            <a href="excluir.php?id=<?=$aluno['id']?>">EXCLUIR</a>
        </p>
        <p><b>Primeira nota: </b>  <?=$aluno['primeira']?>   </p>
        <p><b>Segunda nota: </b>  <?=$aluno['segunda']?>  </p>

        <!-- Se você for fazer os desafios, descomente as linhas abaixo antes
        de programar -->
        <!-- <p><b>Média:</b>  </p>
        <p><b>Resultado:</b> </p> -->

    </section>
    <hr>  
    <?php 
} 
require "inc/desconecta.php";
 ?>

    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>