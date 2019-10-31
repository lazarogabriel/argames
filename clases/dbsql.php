<?php

    include_once("db.php");
    include_once("usuario.php");

    class DbSql extends DB{
        protected $com;

        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=argames;charset=utf8mb4;port=3306';
            $user= "root";
            $pass= "";

            try {
                $this->com= new PDO($dsn, $user, $pass);
            } catch (Exception $e) {
                echo "Database conect error:" . $e->getMessage();
            }
        }

        public function guardarUsuario(Usuario $usuario){
            $db=$this->com;
            $query=$db->prepare("insert into usuarios values(default, :name, :email, :username, :password, :genre, :edad, :ext_img)");
            $query->bindValue(":name", $usuario->getName());
            $query->bindValue(":email", $usuario->getEmail());
            $query->bindValue(":username", $usuario->getUsername());
            $query->bindValue(":edad", $usuario->getEdad());
            $query->bindValue(":genre", $usuario->getGenre());
            $query->bindValue(":password", $usuario->getPassword());
            $query->bindValue(":ext_img", $usuario->getExtencionFoto());

            $id= $db->lastInsertId();
            $usuario->setId($id);
            try{
                $query->execute();
            }catch (Exception $e){
                echo "Database conect error:" . $e->getMessage();
            }

            return $usuario;
        }

        public function traerTodos(){
            $query=$this->com->prepare("SELECT * FROM usuarios");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function traerPorUser($userName){
            $query=$this->com->prepare("SELECT * FROM usuarios WHERE username=:username");
            $query->bindValue(":username", $userName);
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
            return new Usuario($usuario["nombre_apellido"], $usuario["email"], $usuario["username"],$usuario["pass"], $usuario["genre"], $usuario["fech_nac"],$usuario["id"], $usuario["ext_img"]);
        }
    }

?>
