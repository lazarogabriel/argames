<?php
Class Usuario{

  private $name;
  private $username;
  private $email;
  private $password;
  private $genre;
  private $edad;
  private $ext_img;
  private $id;

  public function __construct(string $name, string $username, string $email, string $password, string $genre, int $edad, string $ext_img, $id= null) {
    $this->name = $name;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->edad = $edad;
    $this->genre = $genre;
    $this->ext_img = $ext_img;
    $this->id = $id;
  }

  public function getName(){return $this->name;}
  public function setName(string $name){$this->name = $name;}

  public function getUsername(){return $this->username;}
  public function setUsername($username){$this->username = $username;}

  public function getEmail(){return $this->email;}
  public function setEmail(string $email){$this->email = $email;}

  public function getPassword(){return $this->password;}
  public function setPassword(string $password){$this->password = $password;}

  public function getEdad(){return $this->edad;}
  public function setEdad(int $edad){$this->edad = $edad;}

  public function getGenre(){return $this->genre;}
  public function setGenre(string $genre){$this->genre = $genre;}


  public function getExtencionFoto(){return $this->ext_img;}
  public function setExtencionFoto(string $ext_img){$this->ext_img= $ext_img;}

  public function getId(){return $this->id;}
  public function setId(int $id){$this->id = $id;}
}
?>
