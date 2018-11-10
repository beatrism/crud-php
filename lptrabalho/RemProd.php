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
    
    $id=trim($_POST['id']);

    if(!empty($id)){
    $sql = "DELETE FROM produto WHERE id='$id';"; 
    $ins = mysql_query($sql);
    if(!$ins){
        echo "Erro ao remover produto";
    }
    
} 
else { echo "Descrição em branco";}
    
    header ("location: lstProd.php");
?>