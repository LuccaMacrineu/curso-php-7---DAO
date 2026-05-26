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
//$usuario = new Usuario();
//$usuario ->login("MIKE", "auau");
//echo $usuario;

// INSERE UM USUÁRIO NOVO NA BASE DE DADOS 
//$aluno = new Usuario("ALUNO", "SENHA");
//$aluno->insert();
//echo $aluno;

// ALTERA UM USUÁRIO EXISTENTE NA BASE DE DADOS
//$usuario = new Usuario();
//$usuario->loadById(14);
//$usuario->update("professor", "123456");
//echo $usuario; 

// DELETA UM USUÁRIO EXISTENTE NA BASE DE DADOS
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->delete();
echo $usuario;
?>