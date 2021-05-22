<?php 
$usuarioInserir = $_POST['usuario'];
$senhaInserir = $_POST['senha'];

include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_usuarios(usuario, senha)
                values('{$usuarioInserir}',
                '{$senhaInserir}'
                );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('location: ../agenda/agenda-listar.php?mensagem=cadastrado');
}else{
    echo "Algo deu errado";
}

?>