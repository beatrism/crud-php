<?php
session_start();
?>
<html>
  <head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="login.css">

</head>
<title> Login </title>
    <body id="LoginForm">
        <form id="frmLogin" name="frmLogin" method="POST" action="classe_login.php">
        <div class="container">
        <div class="login-form">
        <div class="main-div">
        <div class="panel">
            <h2>Login</h2>
            <p><?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?></p>
            </div>
    <form id="Login">
        <div class="form-group">
            <input type="user" class="form-control" id="user" name="login" placeholder="User">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pwd" name="senha" placeholder="Password">
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>

</form>
</div>
<p class="botto-text"> Designed by Sunil Rajput</p>
</div></div></div>


</body>
</html>
