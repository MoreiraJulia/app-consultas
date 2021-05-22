<?php include "../includes/cabecalho.php"; ?>

<hr>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
<div class="row">
    <p class="col-md-6">
        <label class="form-label">Nome:</label><input class="form-control" name="nome">
    </p>
    <p class="col-md-6">
        <label class="form-label">Telefone:</label><input class="form-control" name="telefone">
    </p>
    <p class="col-md-6">
        <label class="form-label">CRM:</label><input class="form-control" name="crm">
    </p>
    <p class="col-6">
        <label>Especialidade:</label>
        <select name="especialidade" class="form-select" aria-label="Default select">
            <option value="Cardiologista">Cardiologista</option>
            <option value="Nutricionista">Nutricionista</option>
            <option value="Ortopedista">Ortopedista</option>
        </select>
    </p>
    <p class="d-md-flex justify-content-md-end mt-2">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
    </div>
</form>


<?php include "../includes/rodape.php"; ?>
