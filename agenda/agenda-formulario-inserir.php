<?php include "../includes/cabecalho.php"; ?>

<?php include "../includes/conexao.php"; ?>

<hr>
<form name="cadastro-agenda" method="post" action="agenda-inserir.php" class="mt-4">
    <div class="row d-flex justify-content-center">
        <p class="col-2">
            <label class="form-label">Data:</label>
            <input type="date" name="data" class="form-control">
        </p>
        <p class="col-2">
            <label class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control">
        </p>
        <p class="col-5">
            <label class="form-label">Médico:</label>
            <select name="id_medico" class="form-select" aria-label="Default select">
                <?php 
                $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
                $listaDeMedicos = mysqli_query($conexao, $sqlBuscaMedicos);

                while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                    echo "<option value='{$medico['id']}'>";
                    echo $medico['nome'];
                    echo "</option>";
                }
                ?>
        </select>
        </p>
        <p class="col-4">
            <label class="form-label">Sala:</label>
            <input name="sala" class="form-control">
        </p>
        <p class="col-5">
            <label class="form-label">Paciente:</label>
            <select name="id_paciente" class="form-select" aria-label="Default select">
                <?php 
                    $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                    $listaDePacientes = mysqli_query($conexao, $sqlBuscaPacientes);

                    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                        echo "<option value='{$paciente['id']}'>";
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