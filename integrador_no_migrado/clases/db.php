<?php
    include_once("usuario.php");

    abstract class DB{
        abstract public function guardarUsuario(usuario $usuario);

        abstract public function traerTodos();

        abstract public function traerPorUser($userName);
    }
?>
