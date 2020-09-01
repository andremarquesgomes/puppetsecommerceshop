<?php 

    $id_do_fantoche = $_GET['fantoche'];

    $sql = "select * from fantoches where id_fantoche= ".$id_do_fantoche;

    $resultado = $ligacao->query($sql);

    $linha = mysqli_fetch_assoc($resultado); 

?>
<div class="allProducts">
<li>
    <img src="./imgs/<?php echo $linha['foto_fantoche']; ?>" alt="fantoche">
    <p>
    <?php echo $linha['nome_fantoche'].$linha['detalhes_fantoche']; ?> 
    </p> 
    <p>Preço: <?php echo $linha['preco_fantoche']; ?> </p>
</li>

<form action="adicionar_carrinho.php" method="post">
			<input type="number" name="quantidade" value="1">
			<input type="hidden" name="id" value="<?php echo $id_do_fantoche?>">
			<button>Adicionar ao carrinho</button>
		</form>	
</div>


