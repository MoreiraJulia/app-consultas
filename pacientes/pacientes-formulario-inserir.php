<?php include "../includes/cabecalho.php" ?>


<form  name="formulario-pacientes" method="post" action="pacientes-inserir.php">
    <div class="row">
        <p class="col-6">
            <label class="form-label">Nome:</label>
            <input name="nome" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Telefone:</label>
            <input name="telefone" class="form-control">
        </p>
        <p class="col-2">
            <label class="form-label">Data de nascimento:</label>
            <input name="data_nascimento"  class="form-control" type="date">
        </p>
        <p class="col-2 text-center align-self-center">
            <label class="form-check-label">Convênio:</label>
            <input name="convenio" class="form-check-input" type="checkbox" value="sim">
        </p>
        <p class="col-8">
            <label class="form-label">Diagnóstico:</label>
            <textarea name="diagnostico" class="form-control"></textarea>
        </p>
        <p class="d-md-flex justify-content-md-end mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </div>
</form>
<?php include "../includes/rodape.php" ?>