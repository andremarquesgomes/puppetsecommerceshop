<?php
  session_start();
  include('config.php');
  include('funcoes.php');
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Fantomines</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/fantomines.css">
        <link href='https://fonts.googleapis.com/css?family=Bellefair' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <script src="./js/fatominesjs.js"></script>
    </head>
    <body>





        <div id="login">
            <?php include('logintemplate.php'); ?>
        </div>
        <header>


           <?php
            include ('menu.php'); 
           ?>
        </header>
        <main>

            <?php
               if(isset($_GET['zona']) && $_GET['zona']!='' ){
                $loading_body = $_GET['zona'];
    
              } else {
                $loading_body = 'hpage';
              }
            

            switch($loading_body) {
                case 'hpage' : {
                                include('home.php');
                }               break; 
                case 'whoweare' : {
                                include('quemsomos.php');
                }               break; 

                case 'events' : {
                                include('eventos.php'); 
                }               break;

                case 'store' : {
                                include('loja.php'); 
                }               break; 

                case 'contacts' : {
                                include('contactos.php'); 
                }               break; 
                case 'regist'   :{
                                include('registo.php');
                                break; 
                }
                case 'carrinho' :{
                                include('carrinho_detalhado.php'); 
                                break;
                }
                case 'detalhe' :{
                                include
                                ('produtodetalhado.php');
                                break;
                }
                case 'obrigado': {
                                include
                                ('agradecimento.php');
                                break; 
                }

            }
            ?>
        </main>
        <footer>
            <?php
                include('footer.php') 
            ?>
        </footer>
        
    </body>
</html>


