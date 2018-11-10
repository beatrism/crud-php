<?php
session_start();
?>
<HTML>
<HEAD><TITLE>Login</TITLE></HEAD>
<BODY>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
<form action="classe_login.php" method="post">
<BR>
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit" value="OK!">
</form>
</BODY></HTML>