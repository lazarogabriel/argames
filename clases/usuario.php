<?php
Class Usuario{

  private $id;
  private $username;
  private $password;
  private $email;
  private $name;
  private $edad;
  private $genre;
  private $ext_img;

  public function __construct($name, $email, $username,$password, $genre, $edad, $id= null, $ext_img) {
    $id=$id;
    $this->name = $name;
    $this->password = $password;
    $this->username = $username;
    $this->email = $email;
    $this->edad = $edad;
    $this->genre = $genre;
    $this->ext_img = $ext_img;
  }

  public function getId(){return $this->id;}
  public function setId(int $id){$this->id = $id;}

  public function getName(){return $this->name;}
  public function setName(string $name){$this->name = $name;}

  public function getGenre(){return $this->genre;}
  public function setGenre(string $genre){$this->genre = $genre;}

  public function getPassword(){return $this->password;}
  public function setPassword($password){$this->password = $password;}

  public function getEmail(){return $this->email;}
  public function setEmail(string $email){if(email($email))$this->email = $email;}

  public function getEdad(){return $this->edad;}
  public function setEdad(int $edad){$this->edad = $edad;}

  public function getUsername(){return $this->username;}
  public function setUsername($username){$this->username = $username;}

  public function getExtencionFoto(){return $this->ext_img;}
  public function setExtencionFoto(string $ext_img){$this->ext_img= $ext_img;}

}

 ?>
