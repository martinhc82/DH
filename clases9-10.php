<?php
class Mascota{
  private $nombre;
  public function __construct(string $nombre, int $peso = 0, bool $humor, Especie $especie){
    $this->nombre = $nombre;
    $this->peso = $peso;
    $this->humor = $humor;
    $this->especie = $especie;
  }

  public function setNombre(string $nombre): Mascota
  {
    if (strlen($nombre) < 2) {
      echo 'el nombre es muy corto';
      $this->nombre = '';
    } else{
      $this->nombre = $nombre;
    }

  }

  public function setPeso(string $peso): Mascota
  {
    $this->peso = $peso;
    return $this;
  }

  public function setEspecie(Especie $especie)
  {
    $this->especie = $especie;
  }


  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function getPeso(): int
  {
    return $this->peso;
  }

  public function getHumor(): bool
  {
    return $this->humor;
  }

  public function getEspecie(): Especie
  {
    return $this->especie;
  }
}

$miPerro = new Mascota('Pepe');

echo 'Has comprano a: ' . $miPerro->getNombre() . ' y pesa ' . $miPerro->getPeso();

$elSegundo = new Mascota('Manuel');

echo '<br> Y tambien a: ' . $elSegundo->getNombre() . ' y pesa ' . $elSegundo->getPeso();


$elTercero = (new Mascota())
                            ->setNombre('Pepe')
                            ->setPeso(40)
                            ->setHumor(true);
                            ->setEspecie()





 ?>
