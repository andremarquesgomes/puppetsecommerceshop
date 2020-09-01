<?php
include('config.php');

?>
<div class="pupetform">
                <div class="makeyourpupet">
                    <h1>Faz o teu fantoche</h1>
                </div>

                <form id="Form" method="post" action="encomenda.php">
                 
                    <label>
                        Nome   
                        <input type="text" name="name">
                    </label>
                    <?php
                    if(isset($_SESSION['id'])){
                       // echo "E-mail".' '.$_SESSION['email']; 

                        ?>
                        Email   
                        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" disabled="disabled" >
                        <?php
                    }
                    else{
                            ?>
                        Email   
                        <input type="email" name="email">
                        <?php
                        }
                        ?>
                    <div>
                        <label>
                        Faz uma breve descrição do teu fantoche   
                            <textarea type="text" name="encomenda"> </textarea>
                    
                </div>
                    <button type="submit" name="send">Enviar</button>
                </form>

            <?php 
                if(isset($_GET['status']) && $_GET['status']=='ok') {
    
            ?>
                <div>A sua encomenda foi efectuada com sucesso</div>
            <?php
            }
            ?>

            </div>

<div class="allProducts">
                    <h2>Família Fantomines</h2>
                <ul>

                <?php 

                $sql = "select * from fantoches";

                $resultado = $ligacao->query($sql);

                while($linha = mysqli_fetch_assoc($resultado)) {
                ?>

                    <li>
                        <img src="./imgs/<?php echo $linha['foto_fantoche']; ?>" alt="fantoche">
                        <p>
                        <?php echo $linha['nome_fantoche'].$linha['detalhes_fantoche']; ?> 
                        </p> 
                    <a href="index.php?zona=detalhe&fantoche=<?php echo $linha['id_fantoche']; ?>">Adicionar ao carrinho</a>

                    </li>
                   

                    
                <?php } ?>
                </ul>
            </div>    
        </main>