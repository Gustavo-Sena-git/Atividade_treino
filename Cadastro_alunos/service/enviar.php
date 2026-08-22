<?php
    require_once "../config/conexao.php"

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $curso = $_POST["curso"];

    if($nome == "" || $email == "" || $idade == "" || $curso == ""){
        echo "Prencha todos os campos"
    };

    $sql = "insert into alunos (nome, email, idade, curso) values (?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);


    $stmt->bind_param("ssis", $nome, $email. $idade, $curso);
?>