<?php
	session_start();
	include('config.php');
	include('funcoes.php');
	

	$item_a_colocar_no_carrinho['id_livro'] = $id_fantoche;
	$item_a_colocar_no_carrinho['quantidade'] = $quantidade_do_fantoche;

	$item_a_colocar_no_carrinho = array(
			'id_fantoche' => $_POST['id'],
			'quantidade' => $_POST['quantidade']); 



	if(!isset($_SESSION['carrinho'])){

		$_SESSION['carrinho'] =[];

	} 
		array_push($_SESSION['carrinho'], $item_a_colocar_no_carrinho);

	header('Location:index.php?zona=carrinho');
	



?>

