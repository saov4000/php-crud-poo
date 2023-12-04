<?php

    include_once "DAO.php";
    include_once "Aluno.php";

    $mensagem = "";
    $dao = new DAO();
    $aluno = new Aluno();

    if($_POST["opcao"] == "1"){
        $aluno->setNome($_POST["nome"]);
        $aluno->setSexo($_POST["sexo"]);
        $aluno->setCidade($_POST["cidade"]);
        if($dao->salvar($aluno)){
            $mensagem =  "alert('Cadastro realizado com sucesso!')";
        }else{
            $mensagem =  "alert('Falha ao cadastrar')";
        }
    }else if($_POST["opcao"] == "2"){
        $aluno->setId($_POST["id"]);
        $aluno->setNome($_POST["nome"]);
        $aluno->setSexo($_POST["sexo"]);
        $aluno->setCidade($_POST["cidade"]);
        if($dao->atualizar($aluno)){
            $mensagem =  "alert('Cadastro atualizado com sucesso!')";
        }else{
            $mensagem =  "alert('Falha ao atualizar')";
        }
    }else if($_GET["opcao"] == "3"){
        if($dao->excluir($_GET["id"])){
            $mensagem = "alert('Cadastro excluído com sucesso!')";
        }else{
            $mensagem =  "alert('Falha ao excluir')";
        }     
    }

    echo "<script>".$mensagem."; document.location='../index.php'</script>";
?>