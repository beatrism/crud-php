<?php
    //echo "Meu php esta funcionando..";
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
    
    $id=trim($_POST['id']);
    $desc = trim($_POST['txtDesc']);
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc)){
    $sql = "UPDATE produto SET descricao='$desc', quantidade='$qtde', valor='$valor' where id='$id';"; 
    $ins = mysql_query($sql);
    if(!$ins){
        echo "Erro ao atualizar produto";
    }
    
}
else { echo "Descrição em branco";
    }
    
    header ("location: lstProd.php");
?>