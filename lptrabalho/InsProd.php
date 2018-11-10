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
    
    $desc = trim($_POST['txtDesc']);
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc)){
    $sql = "INSERT INTO produto (descricao, quantidade, valor) VALUES ('$desc', '$qtde', '$valor');";
    $ins = mysql_query($sql);
    if(!$ins)
        echo ("Deu erro na consulta de inserir produto");
    }
    else echo "Descrição em branco";

    header ("location: lstProd.php");
?>