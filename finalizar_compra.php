<?php
	include('config.php');
	include('funcoes.php');

	session_start();
	
	date_default_timezone_set('UTC');

	if(!isset($_SESSION['id'])){
		header('Location:index.php?zona=regist');
	} else {
		if(isset($_SESSION['id'])) {
			foreach($_SESSION['carrinho'] as $key => $item){

				$fk_id_cliente = $_SESSION['id'];
				$fk_id_fantoche = $_SESSION['carrinho'][0]['id_fantoche']; 
				$fk_id_pagamento = $_POST['pagamento']; 
				$quantidade = $_SESSION['carrinho'][0]['quantidade'] ; 
				
				$detalhe_fantoche = getDetalhesFantoches($ligacao, $fk_id_fantoche); 
			
			
				$sql = "insert into compras
				(fk_id_cliente, fk_id_fantoche, fk_id_pagamento ,quantidade)
				values('$fk_id_cliente', '$fk_id_fantoche', '$fk_id_pagamento', $quantidade)";
				$resultado = $ligacao->query($sql); 

				 
				$novo_stock = $detalhe_fantoche['stock_fantoche'] - $quantidade;
	
				$sql_update_stock ="update fantoches set stock_fantoche = $novo_stock where id_fantoche=$fk_id_fantoche";
	
				$resultado_update= $ligacao->query($sql_update_stock);
			
			}
		}
			
		

		
		

        
    }

		$_SESSION['carrinho']=[];

		header('Location:index.php?zona=obrigado');



	
	
?>