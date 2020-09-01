<?php
session_start();
include('config.php');

	$user =$_POST['user_login'];
	$pass =$_POST['user_password'];

	$sql = "select * from clientes 
    where email_cliente ='$user' and password_cliente=MD5('$pass')";
   // echo $sql;

	$resultado = $ligacao->query($sql);


	$n_registos = $resultado->num_rows;


   
	if($n_registos==1){
		$linha = mysqli_fetch_assoc($resultado);
		$nome_do_cliente = $linha['nome_cliente'];
		$id_do_cliente = $linha['id_cliente'];
		$email_do_cliente = $linha['email_cliente']; 

		$_SESSION['nome'] = $nome_do_cliente;
		$_SESSION['id'] = $id_do_cliente;
		$_SESSION['email'] = $email_do_cliente; 
		setcookie('user_login',$user, time()+3600); 
		setcookie('user_password',$pass, time()+3600); 

        
		header('Location:index.php');


	} else {
		header('Location:index.php?status_login=0');
	}


    ?>