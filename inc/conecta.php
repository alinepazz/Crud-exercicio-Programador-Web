<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "progwebt12_escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

// if(!$conexao){
//         die(mysqli_connect_error($conexao));
//     }else {
//         echo "Beleza";
//     }