<?php

    include('config.php'); 
    if(isset($_POST["enviar"])){

        if(
            !empty($_POST["nome_cliente"]) &&
            !empty($_POST["email_cliente"]) &&
            !empty($_POST["password_cliente"]) &&
            !empty($_POST["morada_cliente"]) &&
            !empty($_POST["telefone_cliente"]) &&
            mb_strlen($_POST["nome_cliente"]) > 3 && mb_strlen($_POST["nome_cliente"]) < 64 &&
            mb_strlen($_POST["email_cliente"]) > 3 && mb_strlen($_POST["email_cliente"]) < 252 &&
            mb_strlen($_POST["password_cliente"]) > 1 && mb_strlen($_POST["password_cliente"]) < 1000 &&
            mb_strlen($_POST["morada_cliente"]) > 1 && mb_strlen($_POST["morada_cliente"]) < 255 &&
            mb_strlen($_POST["telefone_cliente"]) > 1 && mb_strlen($_POST["telefone_cliente"]) < 32 &&
            filter_var($_POST["email_cliente"], FILTER_VALIDATE_EMAIL) 
        ){

            
            
            $nome_registado = $_POST['nome_cliente']; 
            $email_registado = $_POST['email_cliente']; 
            $pass_registada = $_POST['password_cliente']; 
            $morada_registada = $_POST['morada_cliente']; 
            $telefone_registado = $_POST['telefone_cliente'];

          
        
        
        $sql = "insert into clientes 
        (nome_cliente, email_cliente, password_cliente, morada_cliente, telefone_cliente)
        values('$nome_registado', '$email_registado', md5('$pass_registada'), '$morada_registada', '$telefone_registado')";
        
        
        $resultado = $ligacao->query($sql);

       


     




        
        header('Location:index.php?zona=regist&status=ok'); 
        }       
        else{
            echo("por favor preencha os dados correctamente"); 
        }
        
    }   
    ?>