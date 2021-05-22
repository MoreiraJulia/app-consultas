<?php 

include "../includes/conexao.php";

$id_medico = $_GET['id_medico'];

$sqlExcluir = "DELETE FROM tb_medicos WHERE id = {$id_medico}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header('location:medicos-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}
?>