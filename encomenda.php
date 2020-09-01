<?php

include('config.php');
session_start();

if(isset($_SESSION['id'])) {
    $email_encomenda = $_SESSION['email'];
    $fk_id_cliente = $_SESSION['id'];
    $nome_cliente = $_POST['name'];
    $descricao_encomenda = $_POST['encomenda']; 


    $sql = "insert into encomendas
(nome_cliente, email_encomenda, descricao_encomenda, fk_id_cliente)
values('$nome_cliente', '$email_encomenda', '$descricao_encomenda', $fk_id_cliente)";
$resultado = $ligacao->query($sql); 
}
else{
    $nome_cliente = $_POST['name'];
    $email_encomenda = $_POST['email']; 
    $descricao_encomenda = $_POST['encomenda'];
    $fk_id_cliente = 'NULL' ; 


    $sql = "insert into encomendas
    (nome_cliente, email_encomenda, descricao_encomenda, fk_id_cliente)
    values('$nome_cliente', '$email_encomenda', '$descricao_encomenda', $fk_id_cliente)";
    $resultado = $ligacao->query($sql); 
}




 
 
header('Location:index.php?zona=store&status=ok'); 

?>