<?php
    require_once("clases/auth.php");
    require_once("clases/db.php");
    require_once("clases/dbsql.php");
    require_once("clases/validador.php");

    $db = new DbSql();
    $auth = new Auth();
    $validador = new Validator();
?>