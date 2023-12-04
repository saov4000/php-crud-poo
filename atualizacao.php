<?php include_once "partials/header.php";?>
<body>
    <nav class="navbar navbar-light bg-light menu">
        <a class="navbar-brand" href="cadastro.php">CRUD PHP POO</a>
    </nav>
    <br>
    <div class="container col-6">
        <h3>Cadastro de Alunos</h3>
        <?php
            include_once "./app/DAO.php";
            $id = $_GET["id"];
            $dao = new DAO();
            $lista = $dao->buscaPorId($id);
        ?>
        <form action="app/controller.php" method="post" onsubmit="return confirmaatu()">
            <label for="">Id</label>
            <input type="text" name="id" class="form-control" value="<?= $lista["id"]?>">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= $lista["nome"]?>">
            <label for="">Sexo</label>
            <select name="sexo" id="" class="form-control">
                <option value=""><?= ($lista["sexo"]=="m")? "Masculino" : "Feminino"; ?></option>
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
            </select>
            <label for="">Cidade</label>
            <input type="text" name="opcao" value="2" hidden>
            <input type="text" name="cidade" class="form-control" value="<?= $lista["cidade"]?>"><br>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
    </div>
<?php include "partials/footer.php" ?>