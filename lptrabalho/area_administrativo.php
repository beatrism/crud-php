<?php
session_start();
?>
<html>
  <head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">

</head>
<title>Area ADM</title>
    <body id="LoginForm">
        <form id="frmLogin" name="frmLogin" method="POST" action="classe_login.php">
        <div class="container">
        <div class="login-form">
        <div class="main-div">
        <div class="panel">
            <h2><span class="container" style="width:500px;">
              <?php  
                echo 'Welcome - '.$_SESSION["login"].''; echo '<label><a href="sair.php">&nbsp;&nbsp;Logout</a></label>';?>
            </span></h2>
            <table>
              <tr>
                <td width="131">
                <h1 class="text-danger font-weight-normal">Acessar Listagem</h1></td>
                <td width="25">&nbsp;</td>
                <td>
                <button name="btlis" id="btlis" class="btn btn-outline-danger btn-lg" type="button" 
                onclick="javascript:location.href='lstProd.php'"><i class="far fa-list-alt"></i></i>
                </button>
                
                </td>
              </tr>
            </table>
            <p>&nbsp;</p>
        </div>
        </div>
        <p>&nbsp;</p>
        <p class="botto-text"> Designed by Sunil Rajput</p>
</div></div></div>


</body>
</html>
