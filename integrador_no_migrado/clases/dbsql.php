<?php

    include_once("db.php");
    include_once("usuario.php");

    class DbSql extends DB{
        protected $com;

        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=argames;charset=utf8mb4;port=3306';
            $user= "root";
            $pass= "";

            try{
              $this->com = new PDO($dsn, $user, $pass);
            }catch (Exception $e) {
              echo "Database conect error:" . $e->getMessage();
            }
        }

        public function guardarUsuario(Usuario $usuario){
            $db = $this->com;
            $query = $db->prepare("INSERT INTO usuarios VALUES(default, :name, :username, :password, :email, :genero, :edad, :ext_img)");
            $query->bindValue(":name", $usuario->getName(), PDO::PARAM_STR);
            $query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
            $query->bindValue(":password", $usuario->getPassword(), PDO::PARAM_STR);
            $query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $query->bindValue(":genero", $usuario->getGenre(), PDO::PARAM_STR);
            $query->bindValue(":edad", $usuario->getEdad(), PDO::PARAM_INT);
            $query->bindValue(":ext_img", $usuario->getExtencionFoto(), PDO::PARAM_STR);

            try{
                $query->execute();
            }catch (Exception $e){
                echo "Database conect error:" . $e->getMessage();
            }

            $usuario->setId($db->lastInsertId());
            return $usuario;
        }

        public function modificarUsuario(int $id, Usuario $usuario){
            $db=$this->com;
            $query=$db->prepare("UPDATE usuarios SET
               name = :name,
               username = :username,
               email = :email,
               password = :password,
               genero = :genero,
               age = :edad,
               ext_img = :ext_img
               WHERE id = :id");
            $query->bindValue(":name", $usuario->getName(), PDO::PARAM_STR);
            $query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
            $query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $query->bindValue(":password", $usuario->getPassword(), PDO::PARAM_STR);
            $query->bindValue(":genero", $usuario->getGenre(), PDO::PARAM_STR);
            $query->bindValue(":edad", $usuario->getEdad(), PDO::PARAM_INT);
            $query->bindValue(":ext_img", $usuario->getExtencionFoto(), PDO::PARAM_STR);
            $query->bindValue(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $usuario;
        }

        public function traerTodos(){
            $query=$this->com->prepare("SELECT * FROM usuarios");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function traerPorUser($username){
            $query=$this->com->prepare("SELECT * FROM usuarios WHERE username = :username");
            $query->bindValue(":username", $username);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function traerPorEmail($email){
            $query=$this->com->prepare("SELECT * FROM usuarios WHERE email=:email");
            $query->bindValue(":email", $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function traerUser($userName){
            $query=$this->com->prepare("SELECT * FROM usuarios WHERE username=:username");
            $query->bindValue(":username", $userName);
            $query->execute();
            $usuario = $query->fetch(PDO::FETCH_ASSOC);

            return new Usuario($usuario["name"], $usuario["username"], $usuario["email"], $usuario["password"], $usuario["genero"], $usuario["age"], $usuario["ext_img"], $usuario["id"]);
        }
    }

?>
