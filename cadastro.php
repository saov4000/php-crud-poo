<?php include_once "partials/header.php";?>
<body>
    <nav class="navbar navbar-light bg-light menu">
        <a class="navbar-brand" href="cadastro.php">CRUD PHP POO</a>
    </nav>
    <br>
    <div class="container col-6">
        <h3>Cadastro de Alunos</h3>
        <form action="app/controller.php" method="post" onsubmit="return confirmacad()" name="cadastra">
            <input type="text" name="id" value="0" hidden>
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control">
            <label for="">Sexo</label>
            <select name="sexo" id="" class="form-control">
                <option value="">--------</option>
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
            </select>
            <label for="">Cidade</label>
            <input type="text" name="cidade" class="form-control"><br>
            <input type="text" name="opcao" value="1" hidden>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
    </div>
<?php include "partials/footer.php" ?>