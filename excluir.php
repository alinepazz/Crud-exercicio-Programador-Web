<?php
require "inc/logica-alunos.php";
$id = $_GET['id'];
excluirAluno($conexao, $id);
require "inc/desconecta.php";
header("location:visualizar.php");