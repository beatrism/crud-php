<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['login']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: login.php");