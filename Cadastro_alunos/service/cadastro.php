<?php
    require_once "../config/conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $curso = $_POST["curso"];

    if($nome == "" || $email == "" || $idade == "" || $curso == ""){
        echo "Preencha todos os campos";
    }

    $sql = "insert into aluno (nome, email, idade, curso) values (?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);


    $stmt->bind_param("ssis", $nome, $email, $idade, $curso);


    if ($stmt->execute()){
        header("Location:../pages/index.php");
        exit();

    }else {
        echo "Erro de cadastro com o banco: ". $stmt->error;
    }

    $stmt->close();
    $conexao->close();
?>