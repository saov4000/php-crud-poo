<?php
include_once "Conexao.php";
include_once "Aluno.php";

class DAO
{

    public function salvar(Aluno $aluno)
    {
        try {
            $sql = "INSERT INTO aluno VALUES(0,:nome,:sexo,:cidade)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $aluno->getNome());
            $stmt->bindValue(":sexo", $aluno->getSexo());
            $stmt->bindValue(":cidade", $aluno->getCidade());
            return $stmt->execute();
        } catch (Exception $e) {
            print "Erro" . $e;
            return null;
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM aluno";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        } catch (Exception $e) {
            print "Erro " . $e;
            return null;
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM aluno WHERE id=:id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $list = $stmt->fetch(PDO::FETCH_ASSOC);
            return $list;
        } catch (Exception $e) {
            print "Erro" . $e;
            return null;
        }
    }

    public function atualizar(Aluno $aluno)
    {
        try {
            $sql = "UPDATE aluno SET nome=:nome,sexo=:sexo,cidade=:cidade WHERE id=:id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $aluno->getId());
            $stmt->bindValue(":nome", $aluno->getNome());
            $stmt->bindValue(":sexo", $aluno->getSexo());
            $stmt->bindValue(":cidade", $aluno->getCidade());
            return $stmt->execute();
        } catch (Exception $e) {
            print "Erro " . $e;
            return null;
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM aluno WHERE id=:id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e) {
            print "Erro " . $e;
            return null;
        }
    }
}
