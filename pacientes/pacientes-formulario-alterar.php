<?php
include "../includes/cabecalho.php";

$id_paciente = $_GET['id_paciente'];

include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_pacientes WHERE id={$id_paciente};";

$listaDePacientes = mysqli_query($conexao, $sqlBuscar);

$nome = $telefone = $data_nascimento = $convenio = $diagnostico = "";

while($paciente = mysqli_fetch_assoc
($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $data_nascimento = $paciente['data_nascimento'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
}
?>

<form name="formulario-alterar-pacientes" class="mt-5" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente;?>">
    <div class='row'>
        <p class="col-md-6">
            <label class="form-label">Nome:</label><input class="form-control" name="nome" value="<?php echo $nome;?>">
        </p>
        <p class="col-md-6">
            <label class="form-label">Telefone:</label><input name="telefone" class="form-control" value="<?php echo $telefone; ?>">
        </p>
        <p class="col-md-2">
            <label class="form-label">Data de nascimento:</label><input name="data_nascimento" type="date" class="form-control" value="<?php echo $data_nascimento; ?>">
        </p>
        
        <p class="col-md-2 text-center align-self-center">
            <label class="form-check-label">Convênio:</label>
            <?php 
            $marcado = "";
            if($convenio == "sim"){
                $marcado = "checked";
            }
            ?>
            <input name="convenio" class="form-check-input" type="checkbox" value="sim" <?php echo $marcado; ?>>
        </p>
        
        <p class="col-md-8">
            <label class="form-label">Diagnóstico:</label>
            <textarea name="diagnostico" class="form-control"><?php echo $diagnostico; ?></textarea>
        </p>
        <p class="d-md-flex justify-content-md-end mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </p>

    </div>

</form>
<?php include "../includes/rodape.php" ?>