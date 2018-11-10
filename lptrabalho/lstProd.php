<?php
    //echo "Meu php esta funcionando..";
    $conexao = mysql_connect("localhost", "root", "");
    if(!$conexao){
        echo "Erro ao se conectar MySql";
        exit;
    }
    $banco = mysql_select_db("lptrabalho");
    if(!$banco){
        echo "Erro ao se conectar ao banco estoque...";
        exit;
    }
    $rs = mysql_query("SELECT * FROM produto");
?>
 
<html>
    <head>
        <meta charset = "UTF-8">
        <title> Listagem de Produto </title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
<body>
    <div class="container col-md-8">
    <h1 class="text-danger font-weight-normal">Lista de Produtos</h1>
    <br>
    <input type="button" id="bt_Add" name="bt_Add" class="btn btn-primary" value="Adicionar"
                                                            onclick="javascript:location.href='frmInsProd.html'">
    <br> <br>
    <table class="table table-striped col-md-8">
        <tr class="text-secondary">
            <th>ID</th>
            <th>Descricao</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th colspan="3" class="text-center">OPERAÇÕES</th>
        </tr>
        <?php while ($linha = mysql_fetch_array($rs)) {?>
            <tr>
                <td> <?php echo $linha ['id'] ?> </td>
                <td> <?php echo $linha ['descricao'] ?> </td>
                <td> <?php echo $linha ['quantidade'] ?> </td>
                <td> <?php echo $linha ['valor'] ?> </td>           
               <td>
                <button class="btn btn-outline-warning bt-sm"
                        onclick="javascript: location.href='frmEditProd.php?id=' + <?php echo $linha['id']?>">
                        <i class="far fa-edit"></i>
                </td>
                <td>
                <button class="btn btn-outline-danger bt-sm" 
                        onclick="javascript: location.href='frmRemProd.php?id=' + <?php echo $linha['id'] ?>">
                         <i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
        <?php }?>


    </table>

</body>
</html>