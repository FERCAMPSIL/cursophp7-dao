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

//$usuario = new Usuario();
//$usuario->login("FERNANDO","22061985");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario();
 //$aluno->setDeslogin("gabriel");
 //$aluno->setDessenha("26062008");

 //$aluno ->insert();

 //echo $aluno;
// altera dados de um usuario
 //$usuario = new Usuario();

 //$usuario->loadById(1);
// $usuario->update("joel","13121962");

 //echo $usuario;

 $usuario = new Usuario();

 $usuario->loadById(1);

 $usuario->delete();

 echo $usuario;


?>