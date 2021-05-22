<?php
include "../includes/conexao.php";

$id_agenda = $_GET['id_agenda'];
$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id_agenda}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header('location:agenda-listar.php?mensagem=excluido');
}else{
    echo "Algo deu errado";
}
?>