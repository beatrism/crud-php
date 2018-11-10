<?php
    /*$conexao = mysql_connect("localhost", "root", "");
    if(!$conexao){
        echo "Erro ao se conectar MySql";
        exit;
    }
    $banco = mysql_select_db("lptrabalho");
    if(!$banco){
        echo "Erro ao se conectar ao banco estoque...";
        exit;
    }*/
    include("con_db_mysql.php");
    $id = ($_REQUEST['id']);
    $rs = mysql_query('SELECT * FROM produto where id='.$id);
    $edita = mysql_fetch_array($rs);
    //echo $edita['descricao'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Produto</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <body>
            <div class="container col-md-4">
            <h1>Editar Produto</h1>
        <form id="frmEditProd" name="frmEditProd" method="POST" action="editProd.php">
            <div class="form-group">
                <label for="lblId"> ID: </label>
                <label for="lblId" class="form-control col-md-1"><?php echo $edita['id'] ?></label>
                <input type="hidden" name="id" value="<?php $edita['id'] ?>">     
            </div>
            <div class="form-group">
                <label for="lblDesc">Descrição: </label>
                <input class="form-control col-md-8" type="text" id= "txtDesc" name="txtDesc" class="form-control" class="form-control col-md-4"
                    value ="<?php echo $edita['descricao']?>">
            </div>
            <div class="form-group">
                <label for="lblQtde">Quantidade: </label>
                <input class="form-control col-md-8" type="text" id= "txtQtde" name="txtQtde" class="form-control" class="form-control col-md-4"
                    value ="<?php echo $edita['quantidade']?>">
            </div>
            <div class="form-group">
                <label for="lblValor">Valor: </label>
                <input class="form-control col-md-8" type="text" id= "txtValor" name="txtValor" class="form-control" class="form-control col-md-4"
                    value ="<?php echo $edita['valor']?>">
            </div>
                <input type="submit" id="btEnviar" name="btEnviar" class="btn btn-success" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar" class="btn btn-info" value="Limpar">
                <input type="button" id="bt_Cancel" name="bt_Cancel" class="btn btn-danger" value="Editar"
                                                            onclick="javascript:location.href='lstProd.php'">
</div>
</form>
        </body>
</html>