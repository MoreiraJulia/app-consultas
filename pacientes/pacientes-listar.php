<?php include "../includes/cabecalho.php" ?>

<?php 
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_pacientes";

$listaDePacientes = mysqli_query($conexao , $sqlBusca);
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
    <a href="pacientes-formulario-inserir.php" class="btn btn-primary mt-2"><i class="bi-plus-circle"></i>Novo paciente</a>
</p>

<table class="table mt-4 text-center">
    <tr class="table-primary">
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Data de nascimento</td>
        <td>Convênio</td>
        <td>Ações</td>
    </tr>
    <?php 
    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";

        $dataBrasil = date('d-m-Y', strtotime($paciente['data_nascimento']));
        echo "<td>{$dataBrasil}</td>";

        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a  class='btn btn-warning' href='pacientes-formulario-alterar.php?id_paciente={$paciente['id']}'><i class='bi bi-pencil-square'></i></a> ";
        echo "<a class='btn btn-danger' href='pacientes-excluir.php?id_paciente={$paciente['id']}'><i class='bi bi-x-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php" ?>