<?php include "../includes/cabecalho.php"; ?>

<?php include "../includes/conexao.php"; 
$sqlBusca = "SELECT 
            tb_agenda.id,
            tb_agenda.data,
            tb_agenda.hora,
            tb_medicos.nome as 'nome_medico',
            tb_agenda.sala,
            tb_pacientes.nome as 'nome_paciente'
            from tb_agenda
            inner join tb_pacientes on tb_agenda.id_paciente = tb_pacientes.id
            inner join tb_medicos on tb_agenda.id_medico = tb_medicos.id";
            

$listaDeAgenda = mysqli_query($conexao, $sqlBusca);
?>

<hr>

<?php if(isset($_GET['mensagem'])){
    if($_GET['mensagem'] == 'cadastrado'){
        ?>
        <div class="alert alert-primary">
            Cadastrado com sucesso!
        </div>
    <?php 
    }
    if($_GET['mensagem'] == 'alterado'){
        ?>
        <div class="alert alert-warning">
            Alterado com sucesso!
        </div>
    <?php
    }
    if($_GET['mensagem'] == 'excluido'){
    ?>
        <div class="alert alert-danger">
            Excluido com sucesso!
        </div>
    <?php
    }
}
    ?>
<p class="text-center">
    <a href="agenda-formulario-inserir.php" class="btn btn-primary mt-2"><i class="bi bi-plus-circle"></i>Agendar consulta</a>
</p>

<table class="table mt-4 text-center">
    <tr class="table-primary">
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Sala</th>
        <th>Paciente</th>
        <th>Ações</th>
    </tr>
    <?php
    while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
        echo "<tr>";
        echo "<td>{$agenda['id']}</td>";

        $dataBrasil = date('d-m-Y', strtotime($agenda['data']));
        echo "<td>{$dataBrasil}</td>";


        echo "<td>{$agenda['hora']}</td>";
        echo "<td>{$agenda['nome_medico']}</td>";
        echo "<td>{$agenda['sala']}</td>";
        echo "<td>{$agenda['nome_paciente']}</td>";
        echo "<td><a class='btn btn-warning' href='agenda-formulario-alterar.php?id_agenda={$agenda['id']}'><i class='bi bi-pencil-square'></i></a> ";
        echo "<a class='btn btn-danger' href='agenda-excluir.php?id_agenda={$agenda['id']}'><i class='bi bi-x-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>

<?php include "../includes/rodape.php"; ?>