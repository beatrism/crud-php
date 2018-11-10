<?php
    /*$conexao = mysql_connect("localhost", "root", "");
    /if(!$conexao){
        echo "Erro ao se conectar MySql";
        exit;
    }
    $banco = mysql_select_db("lptrabalho");
    if(!$banco){
        echo "Erro ao se conectar ao banco estoque...";
        exit;
    }
    */ 
    include("con_db_mysql.php");
    $id = ($_REQUEST['id']);
    $rs = mysql_query('SELECT * FROM produto where id='.$id);
    $linha = mysql_fetch_array($rs);
    //echo $linha['descricao'];
    
?>
<html>
    <head>
    <meta charset = "UTF-8">
        <title> Remover Produto </title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>

    <body>
        <div class="container col-md-8">
            <h1>Remover Produto</h1>
            <form id= "frmRemProd" name="frmRemProd" method="POST" action="remProd.php">
                <div class="form-group">
                    <label for="lblId">
                        <span class="font-weight-bold">ID: </span>
                        <span class="font-weight-light"><?php echo $linha['id']; ?></span>
</label>
        <input type="hidden" id="txtId" name="txtId" value="<?php echo $linha['id']?>">
        </div>
        <div class="form-group">
            <label for="lblDesc">
                    <span class="font-weight-bold">Descrição: </span>
                    <span class="font-weight-light"><?php echo $linha['descricao']; ?></span>
</label>
</div>
        <div class="form-group">
            <label for="lblQtde">
                    <span class="font-weight-bold">Quantidade: </span>
                    <span class="font-weight-light"><?php echo $linha['quantidade']; ?></span>
</label>
</div>
        <div class="form-group">
            <label for="lblValor">
                    <span class="font-weight-bold">Valor: </span>
                    <span class="font-weight-light"><?php echo $linha['valor']; ?></span>
</label>
</div>
        <button name="btRem" id="btRem" class="btn btn-success" type="submit"><i class="far fa-check-circle"></i> Remover</button>
        <button name="btBack" id="btBack" class="btn btn-danger" type="button"
                onclick="javascript:location.href='lstProd.php'">
                <i class="far fa-arrow-alt-circle-left"></i> Voltar</button>
</form>
</body>
</html>