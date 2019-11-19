<?php
    include_once("db.php");


    class Validator{

        public function validarInformacion($informacion, DB $db){
            $errores =[];
            foreach ($informacion as $key => $value){
                if(!is_array($value))$informacion[$key] = trim($value);
            }

            if(strlen($informacion['name']) < 6){
                $errores["nameShort"]= "El nombre es demasiado corto";
            }elseif(strlen($informacion["name"]) > 29){
                 $errores["nameLong"] = "El nombre y Apellido son demasiados largos";
            }

            if($informacion["email"] == ""){
                $errores["emailEmpty"] = "No escribiste un email";
            }elseif(!filter_var($informacion["email"], FILTER_VALIDATE_EMAIL)){
                $errores["emailWrong"] = "El email tiene que ser un email";
            }elseif($db->traerPorEmail($informacion["email"]) != NULL ){
                $errores["emailExist"] = "El email ya esta registrado";
            }

            if(strlen($informacion["username"]) < 4){
                $errores["usernameShort"]="El nombre de usuario es demasiado corto";
            }elseif(strlen($informacion["username"]) > 14){
                $errores["usernameLong"]="El nombre de usuario es demasiado largo";
            }elseif($db->traerPorUser($informacion["username"]) != NULL){
                $errores["usernameExist"]="El nombre de usuario ya existe";
            }

            if($informacion["gen"] == "")$errores["genreEmpty"]="Tenes que seleccionar un genero";

            if($informacion["password"] == ""){
                $errores["passwordEmpty"] = "La contraseña esta vacia";
            }elseif($informacion["password"] < 7){
                $errores["passwordShort"] = "La contraseña es demasiado corta";
            }

            if($informacion["cPassword"] == ""){
                $errores["cPasswordEmpty"] = "Debes completar este campo";
            }elseif($informacion["password"] != $informacion["cPassword"]){
                $errores["cPasswordFail"] = "Las contraseñas no coinciden";
            }

            if($informacion["edad"] == ""){
                $errores["emptyAge"] = "Debes completar este campo";
            }elseif($informacion["edad"] < 0 || $informacion["edad"] > 90){
                $errores["outIntervalAge"] = "La edad debe ser mayor que cero y menor que 90";
            }

            if($_FILES["imagen"]["error"]===UPLOAD_ERR_OK){
               $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
               $extenciones_validas = ["jpeg", "jpg","png","bmp","JPG","gif"];
               if(!in_array($ext, $extenciones_validas))$errores["extFileError"] = "La extencion del archivo es invalida";
             }else{
               $errores["fileError"] = "Archivo invalido";
             }

            return $errores;
        }

        public function validarLogin($informacion, DB $db){
            $errores = [];

            foreach ($informacion as $key => $value){
                $infomaciion[$key] = trim($value);
            }
            $usuario = $db->traerPorUser($informacion["username"]);

            if($informacion["username"] = ""){
                $errores["loginUsernameEmpty"]="Debe ingresar un Usuraio";
            }elseif($usuario==NULL){
                $errores["loginUsernameFail"] = "El usuario no esta registrado";
            }

            if($informacion["password"] == ""){
                $errores["loginPasswordEmpty"] = "Debe ingresar una contraseña";
            }elseif($usuario != NULL){
              if(md5($informacion["password"]) != $usuario["password"])$errores["loginPasswordFail"] = "La contraseña es incorrecta";
            }
            return $errores;
        }

    }
?>
