<?php
    include_once("db.php");

    class Auth{

        public function __construct(){
            if(isset($_SESSION))session_start();

            if(!isset($_SESSION["logueado"]) && isset($COOKIE["logueado"]))$_SESSION["logueado"] = $COOKIE["logueado"];
        }

        public function loguear($userName){ $_SESSION["logueado"] = $userName; }

        public function estaLogueado(){ return isset($_SESSION["logueado"]); }

        public function usuarioLogueado(){
            if(!estaLogueado())return NULL;
            $userName = $_SESSION["logueado"];
            return traerPorUser($userName);
        }

        public function logout(){
            session_destroy();
            setcookie("logueado", "",-1);
        }

        public function rememberMe($userName){setcookie("logueado", $userName, time() + 3600 * 2);}
    }
?>
