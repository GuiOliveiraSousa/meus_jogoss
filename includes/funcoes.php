<?php
require_once 'conexao.php';

// Adicionar um jogo
function adicionarJogo($nome, $feedback) {
    global $conexao;
    $nome = mysqli_real_escape_string($conexao, $nome);
    $feedback = mysqli_real_escape_string($conexao, $feedback);
    $sql = "INSERT INTO jogos (nome, feedback) VALUES ('$nome', '$feedback')";
    return mysqli_query($conexao, $sql);
}

// Listar todos os jogos
function listarJogos() {
    global $conexao;
    $sql = "SELECT * FROM jogos ORDER BY data_cadastro DESC";
    return mysqli_query($conexao, $sql);
}

// Pegar um jogo específico
function pegarJogo($id) {
    global $conexao;
    $id = (int)$id;
    $sql = "SELECT * FROM jogos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

// Editar um jogo
function editarJogo($id, $nome, $feedback) {
    global $conexao;
    $id = (int)$id;
    $nome = mysqli_real_escape_string($conexao, $nome);
    $feedback = mysqli_real_escape_string($conexao, $feedback);
    $sql = "UPDATE jogos SET nome = '$nome', feedback = '$feedback' WHERE id = $id";
    return mysqli_query($conexao, $sql);
}

// Apagar um jogo
function deletarJogo($id) {
    global $conexao;
    $id = (int)$id;
    $sql = "DELETE FROM jogos WHERE id = $id";
    return mysqli_query($conexao, $sql);
}
