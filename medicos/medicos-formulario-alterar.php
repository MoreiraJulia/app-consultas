<?php 
include "../includes/cabecalho.php"; 

$id_medico = $_GET['id_medico'];

include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_medicos WHERE id={$id_medico};";

$listaDeMedicos = mysqli_query($conexao , $sqlBuscar);

$nome = $telefone = $crm = $especialidade = "";

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>

<form name="formulario-alterar-medicos" class="mt-5" method="post" action="medicos-alterar.php">
<input name="id_medico" type="hidden" value="<?php echo $id_medico;?>">
<div class="row">
    <p class="col-md-6">
        <label class="form-label">Nome:</label><input class="form-control" name="nome" value="<?php echo $nome;?>" >
    </p>
    <p class="col-md-6">
        <label class="form-label">Telefone:</label><input class="form-control" name="telefone" value="<?php echo $telefone; ?>">
    </p>
    <p class="col-md-6">
        <label class="form-label">CRM:</label><input class="form-control" name="crm" value="<?php echo $crm;?>">
    </p>
    <p class="col-6">
        <label>Especialidade:</label>
        <select name="especialidade" class="form-select" aria-label="Default select example">
            <option value="Cardiologista" <?php if($especialidade =='Cardiologista'){ echo "selected "; }?>>Cardiologista</option>
            <option value="Nutricionista"  <?php if($especialidade =='Nutricionista'){ echo "selected "; }?>>Nutricionista</option>
            <option value="Ortopedista"  <?php if($especialidade =='Ortopedista'){ echo "selected "; }?>>Ortopedista</option>
        </select>
    </p>
    <p class="d-md-flex justify-content-md-end mt-2">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </p>
    </div>
</form>

<?php include "../includes/rodape.php"; ?>
