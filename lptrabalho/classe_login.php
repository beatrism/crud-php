<?php 
// Conexão com o banco de dados Mysql
include("con_db_mysql.php");
// Inicia sessões 
session_start(); 
 
// Recupera o login do form
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
// Converte a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 
 
// Usuário não forneceu a senha ou o login 
if(!$login || !$senha) 
{ 

$_SESSION['msg'] = "Você deve digitar sua senha e login";
header("Location: login.php");
exit; 
} 
 
/** 
* Executa a consulta no banco de dados. 
* Caso o número de linhas retornadas seja 1 o login é válido, 
* caso 0, inválido. 
*/
//$SQL = "SELECT id, nome, login, senha FROM aut_usuarios WHERE login = "".$login ."""; 
$SQL = "SELECT id, nome, login, senha FROM usuario WHERE login='$login' LIMIT 1";
$result_id = mysql_query($SQL) or die("Erro no banco de dados!!"); 
$total = mysql_num_rows($result_id); 
 
// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($total) 
{ 
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
$dados = mysql_fetch_array($result_id); 
 
// Agora verifica a senha 
if(!strcmp($senha, $dados["senha"])) 
{ 
// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
$_SESSION["id_usuario"]= $dados["id"]; 
$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
$_SESSION['login'] = $login;
header("Location: area_administrativo.php"); 
exit;
} 
// Senha inválida 
else
{ 
$_SESSION['msg'] = "Login e senha incorreto!";
header("Location: login.php");
exit; 
} 
} 
// Login inválido 
else
{ 
$_SESSION['msg'] = "O login fornecido por você é inexistente!";
header("Location: login.php");
exit; 
}
?>