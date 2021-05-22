<?php include "../includes/cabecalho.php"; ?>

<hr>

<h2 class="text-center">Bem-vindo(a) ao Unipame</h2>

<?php if(isset($_GET['mensagem'])){
    if($_GET['mensagem'] == 'errado'){
        ?>
        <div class="alert alert-danger">
            usuário ou senha inválido
        </div>
    <?php
    }
}
    ?>
    
<form name="formulario-login" action="login.php" method="post">
    <div class="d-flex justify-content-center border-1">
        <div class="row g-0">
            <div class="col-6">
                <img src="../img/estetoscopio2.png">
            </div>
            <p class="col-6 align-self-center">
                <label class="form-label">Usuário:</label>
                <input name="usuario" class="form-control">
                <label class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control">
            </p>
            <p class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Acessar</button>
            </p>
           
        </div>
    </div>   
</form>
<div class="text-center">
<p>Não tem cadastro?<a href="usuarios-formulario-inserir.php">Criar Cadastro</a></p>
</div>

<?php include "../includes/rodape.php" ?>
