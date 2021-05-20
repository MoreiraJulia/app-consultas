<?php include "../includes/cabecalho.php"; ?>
<hr>
<p class="text-center">
    <a href="medicos-formulario-inserir.php" class="btn btn-primary mt-2"><i class="bi-plus-circle"></i>Novo médico</a>
</p>

<?php 

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos;";
$listaDeMedicos = mysqli_query($conexao , $sqlBusca);
?>
<table class="table mt-4 text-center">
    <tr class="table-primary">
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>
    <?php
    while($medico = mysqli_fetch_assoc($listaDeMedicos)){
        echo "<tr>";
        echo "<td>{$medico['id']}</td>";
        echo "<td>{$medico['nome']}</td>";
        echo "<td>{$medico['telefone']}</td>";
        echo "<td>{$medico['crm']}</td>";
        echo "<td>{$medico['especialidade']}</td>";
        echo "<td><a href='medicos-formulario-alterar.php?id_medico={$medico['id']}'>Alterar</a> | ";
        echo "<a href='medicos-excluir.php?id_medico={$medico['id']}'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<?php include "../includes/rodape.php"; ?>
