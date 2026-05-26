<?php

require_once("config.php");
// CARREGA UM USUARIO
//$mike = new Usuario();
//$mike->loadById(1);
//echo $mike;

// CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

// PESQUISA USUARIOS
//$pesquisa = Usuario::search("LU");
//echo json_encode($pesquisa);

// CARREGA UM USUARIO USANDO LOGIN E SENHA
$usuario = new Usuario();
$usuario ->login("MIKE", "auau");
echo $usuario;

?>