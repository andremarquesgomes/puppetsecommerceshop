<?php 
    
    function getDetalhesFantoches($con, $id){
        $sql = "select * from fantoches where id_fantoche=".$id;
        $resultado = $con->query($sql);

        $linha = mysqli_fetch_assoc($resultado); 
      
        return $linha; 
     
    }
   

    function getMeiosDePagamento($con){

		$sql = "select * from pagamentos";

		$resultado = $con->query($sql);

		$lista_meios_meios_pagamento = [];

		while($linha = mysqli_fetch_assoc($resultado)){
			array_push($lista_meios_meios_pagamento, $linha);
		}


		return $lista_meios_meios_pagamento;

	}
?>

