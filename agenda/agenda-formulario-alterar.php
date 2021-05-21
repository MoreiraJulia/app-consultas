<?php 
include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 

$id_agenda = $_GET['id_agenda'];
$sqlBuscaAgenda = "SELECT * FROM tb_agenda WHERE id = {$id_agenda}";
$data = $hora = $id_medico = $sala = $id_paciente = "";

$listaDeAgendas = mysqli_query($conexao, $sqlBuscaAgenda);
while($agenda = mysqli_fetch_assoc($listaDeAgendas)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}
?>

<hr>
<form name="cadastro-agenda" method="post" action="agenda-alterar.php" class="mt-4">
<input type="hidden" name="id_agenda" value="<?php echo $id_agenda ; ?>">
    <div class="row d-flex justify-content-center">
        <p class="col-2">
            <label class="form-label">Data:</label>
            <input type="date" name="data" class="form-control" value="<?php echo $data; ?>">
        </p>
        <p class="col-2">
            <label class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control" value="<?php echo $hora; ?>">
        </p>
        <p class="col-5">
            <label class="form-label">Médico:</label>
            <select name="id_medico" class="form-select" aria-label="Default select">
                <?php 
                $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
                $listaDeMedicos = mysqli_query($conexao, $sqlBuscaMedicos);

                while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                    if($id_medico == $medico['id']){
                         echo "<option value='{$medico['id']}' selected>";
                    }else{
                        echo "<option value='{$medico['id']}'>";
                    }
                    echo $medico['nome'];
                    echo "</option>";
                }
                ?>
        </select>
        </p>
        <p class="col-4">
            <label class="form-label">Sala:</label>
            <input name="sala" class="form-control" value="<?php echo $sala; ?>">
        </p>
        <p class="col-5">
            <label class="form-label">Paciente:</label>
            <select name="id_paciente" class="form-select" aria-label="Default select">
                <?php 
                    $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                    $listaDePacientes = mysqli_query($conexao, $sqlBuscaPacientes);

                    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                        if($id_paciente == $paciente['id']){
                             echo "<option value='{$paciente['id']}' selected>";
                        }else{
                            echo "<option value='{$paciente['id']}'>";
                        }
                       
                        echo $paciente['nome'];
                        echo "</option>";
                    }   
                ?>
        </select>
        </p>
        <p  class="d-md-flex justify-content-md-end mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </div>
</form>
<?php include "../includes/rodape.php"; ?>