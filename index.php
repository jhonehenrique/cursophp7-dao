<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);



//Carrega um usuario//
// $root = new Usuario();
// $root->loadById(3);



//Carrega uma lista de usuarios//
$lista = Usuario::getList();

echo json_encode($lista);

?>