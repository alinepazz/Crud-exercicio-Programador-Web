<?php
require "conecta.php";

// INSERT

function inserirNovoAluno($conexao, $nome, $primeira, $segunda) {
//Montar o comando SQL inserir

$sql = "INSERT INTO alunos(nome, primeira, segunda) VALUES('$nome', $primeira, $segunda)";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 



}//fim da function inserir



//SELECT

function lerAlunos($conexao){
    $alunos = [];

    //Montar o comando SQL
    $sql = "SELECT * FROM alunos ORDER BY nome";


    //Executando a query
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


    while($aluno = mysqli_fetch_assoc($resultado) ){
        array_push($alunos, $aluno);
    }

    return $alunos;

}

//SELECT para carregar/buscar os dados dos fabricantes

function lerUmAluno($conexao, $id) {
    $sql = "SELECT * FROM alunos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}// fim function lerUmFabricante




//UPDATE para atualizar os dados de UM FABRICANTE

function atualizarAluno($conexao, $id, $nome, $primeira, $segunda){
    $sql ="UPDATE alunos SET nome = '$nome', primeira = $primeira, segunda = $segunda WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


    //DELETE

    function excluirAluno($conexao, $id){
        $sql = "DELETE FROM alunos WHERE id = $id";
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


    }// fim da function excluirFabricante

