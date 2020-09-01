<?php 

include('config.php');
session_start();


if(isset($_SESSION['id'])){
    $texto_mensagem =	$_POST['mensagem'];
    $nome_cliente_mensagem = $_POST['name']; 	
    $email_cliente_mensagem =  $_POST['email']; 
    $fk_id_cliente = $_SESSION['id'];  

$sql = "insert into mensagens
(texto_mensagem, nome_cliente_mensagem, email_cliente_mensagem, fk_id_cliente)
values('$texto_mensagem', '$nome_cliente_mensagem', '$email_cliente_mensagem', $fk_id_cliente)";   

$resultado = $ligacao->query($sql);

}
else{
    $texto_mensagem =	$_POST['mensagem'];
    $nome_cliente_mensagem = $_POST['name']; 	
    $email_cliente_mensagem =  $_POST['email']; 
    
    $sql = "insert into mensagens
    (texto_mensagem, nome_cliente_mensagem, email_cliente_mensagem)
    values('$texto_mensagem', '$nome_cliente_mensagem', '$email_cliente_mensagem')"; 
    $resultado = $ligacao->query($sql); 
}

    
    
