<?php 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];

include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_medicos(nome, telefone, crm, especialidade) 
                values('{$nome}' , 
                '{$telefone}' , 
                '{$crm}' , 
                '{$especialidade}'
                );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('location:medicos-listar.php?mensagem=cadastrado');
}else{
    echo "Algum erro aconteceu";
}

?>