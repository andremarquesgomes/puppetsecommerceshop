<?php


	if(!isset($_SESSION['nome'])) {
?>

<form method="post" action="valida_login.php">
	<ul>
		<li>
			Login: <input type="text" name="user_login" 
			value="<?php echo (isset($_COOKIE['user_login'])) ? $_COOKIE['user_login']:""; ?>">
		</li>

		<li>
			Password: <input type="password" name="user_password" 
			value="<?php echo (isset($_COOKIE['user_password'])) ? $_COOKIE['user_password']:""; ?>">
		</li>

		<li>
			<button>Entrar</button>
		</li>
	</ul>
</form>

<a href="index.php?zona=recuperar_pass">Recuperar Password</a>
<a href="index.php?zona=regist">Registar</a>

<?php
	if(isset($_GET['status_login']) && $_GET['status_login']== '0'){ ?>
		<div>LOGIN ERRADO!!!</div>
<?php
	}

} else {
	echo "Ola Senhor(a) ".$_SESSION['nome']; ?>

	<a href="logout.php">LOGOUT</a>

	<?php
}
?>

<a href="index.php?zona=carrinho">Carrinho de compras</a>