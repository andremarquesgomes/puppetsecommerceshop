<php?
if(isset($_GET['del'][$id]))
    {
      $id = intval($_GET['add']);
      if(isset($_SESSION['carrinho'][$id]))
      {
        unset($_SESSION['carrinho'][$id]);
      }
    }

?>

<div class="detalhe-carrinho">
	<?php if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) { ?>
	
	<table>
		<thead>
			<td width="300">Fantoche</td>
			<td width="50">Quantidade</td>
			<td width="50">Preço Unitário</td>
			<td width="50">Preço Total</td>
			<td width="50">Remover</td>
		</thead>
		<?php 
			$total_compra = 0; 
			
			
			
			for($i=0;$i<count($_SESSION['carrinho']); $i++ ) {
				$detalhe_fantoche = 
				getDetalhesfantoches($ligacao, $_SESSION['carrinho'][$i]['id_fantoche']);
				$total_do_fantoche = 
				$detalhe_fantoche['preco_fantoche'] * $_SESSION['carrinho'][$i]['quantidade']; 
				
				
				$total_compra +=  $total_do_fantoche;
				
				if(isset($_SESSION['del']['carrinho'][$i]['id_fantoche']))
				{
					
					if(isset($_SESSION['carrinho'][$i]['id_fantoche']))
					{
						unset($_SESSION['carrinho'][$i]['id_fantoche']);
					}
    			}
		?>		
		<tr>
				<td><?php echo $detalhe_fantoche['nome_fantoche'] ?></td>
					<td> <?php echo $_SESSION['carrinho'][$i]['quantidade'] ?></td>
				<td><?php echo $detalhe_fantoche['preco_fantoche'] ?></td>
		 			<td><?php echo $total_do_fantoche; ?>.00</td>
					 <td> <a href="carrinho_detalhado.php=<?php echo ($_SESSION['id_fantoche'])?>">Excluir</a></td>
		 		</tr>
		 	<?php

				


		}

		?>


		<tr>
			<td colspan="3">TOTAL:</td>
			<td><?php echo $total_compra; ?>.00€</td>

		</tr>

	</table>

		
	<form action="finalizar_compra.php" method="post">
	
		<?php 
			$lista_meios= getMeiosDePagamento($ligacao);
		?>
		<select name="pagamento">

			<?php
				for($i=0; $i<count($lista_meios);$i++){ ?>
					<option value="<?php echo $lista_meios[$i]['id_pagamento'] ?>">
						<?php echo $lista_meios[$i]['tipo_pagamento'] ?>
							
					</option>
			<?php	}
			?>
				
		</select>

		<button>FINALIZAR COMPRA</button>
	</form>

	<?php } else {
		echo "O carrinho está vazio";
	} ?>

</div>