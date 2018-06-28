<?php
require_once("config.php");

/* $sql = new Sql();

$usuarios = $sql->select("select *from tb_usuarios");

echo json_encode($usuarios); */


// tras apenas um usuario
//$root = new Usuario();

//$root->loadbyId(5);

//echo $root;

//carrega uma lista de usuarios

//$list = Usuario::getList();

//echo json_encode($list);

//carrega uma lista de usuario buscando pelo login

//$search = Usuario::search("Ro");

//echo json_encode($search);

// carrega um usuario usando login ou senha

$usuario = new Usuario();
$usuario->login("FERNANDO","22061985");

echo $usuario;
?>