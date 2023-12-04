<?php 
    include_once "partials/header.php";
    include_once "./app/DAO.php";
    $dao = new DAO();
    $lista = $dao->listar();
?>
<body>
    <nav class="navbar navbar-light bg-light menu">
        <a class="navbar-brand">CRUD PHP POO</a>
    </nav>
    <br>
    <div class="container">
        <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
        <br>
        <br>
        <table class="table table-bordered table-hover table-light">
            <thead>     
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td><?= ($row["sexo"]=="m")? "Masculino" : "Feminino"; ?></td>
                    <td><?= $row['cidade'] ?></td>
                    <td class="text-center">
                        <a href="./atualizacao.php?id=<?= $row['id'] ?>" class="btn btn-warning">Editar</a>
                        <a class="btn btn-danger" onclick="confirmadel(<?= $row['id'] ?>)">Excluir</a>
                    </td>
                </tr>
                <?php endforeach ?> 
            </tbody>
        </table>
    </div>
<?php include "partials/footer.php" ?>