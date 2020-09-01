<form method ="post" action="registar_cliente.php">
    <ul>
        <li>Nome: <input type="text" name="nome_cliente"> </li>
        <li>E-mail: <input type="email" name="email_cliente"> </li>
        <li>Morada: <input type="text" name="morada_cliente"> </li>
        <li>Password: <input type="password" name="password_cliente"> </li>
        <li>Telefone: <input type="text" name="telefone_cliente"> </li>
        <li><button type="submit" name="enviar" >Registar</button></li>
    </ul>
</form>


<?php 
    if(isset($_GET['status']) && $_GET['status']=='ok') {
    
    ?>
    <div>O registo foi efectuado com sucesso</div>
    <?php
    }
    ?>