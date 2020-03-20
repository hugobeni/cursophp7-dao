<?php 
require_once("config.php");
//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carega uma lista de usuarios
//$list = Usuario::getList();
//echo json_encode($list);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("t");
//echo json_encode($search);

//carrega um usuario usando login e a senha
$usuario = new Usuario();
$usuario->login("root","auscgas");

echo $usuario;
 ?>