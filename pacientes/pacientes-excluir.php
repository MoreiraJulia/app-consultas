<?php 
include "../includes/conexao.php";

$id_paciente = $_GET['id_paciente'];

$sqlExcluir = "DELETE FROM tb_pacientes WHERE id = {$id_paciente}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header('location:pacientes-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}
?>