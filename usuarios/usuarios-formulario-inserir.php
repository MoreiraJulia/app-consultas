<?php include "../includes/cabecalho.php"; ?>

<hr>

<form name="formulario-inserir-usuarios" method="post" action="usuarios-inserir.php">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-6">
                <img src="../img/cadastro1.png">
            </div>
            <p class="col-6 align-self-center">
                <label class="form-label">Usuário:</label>
                <input class="form-control" name="usuario">
                <label class="form-label">Senha:</label>
                <input class="form-control" type="password" name="senha">
            </p>
            <p class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
            </p>
           
        </div>
    </div>
</form>

<?php include "../includes/rodape.php"; ?>