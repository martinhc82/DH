<?php
class Usuario{
  private $email;
  private $name;
  private $password;

  public function __construct(string $name, string $email, string $password){
    $this->name = $name;
    $this->email = $email;
    $this->setPass($password);
  }


  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  public function setPass(string $password)
  {
    $this->password = $this->encriptarPass($password);
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getPass(): string
  {
    return $this->password;
  }

  private function encriptarPass(string $password): string
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }


}

 ?>
