<?php
namespace Application\Entity;
 
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
 
#[Entity, Table(namw : 'generos')]
class Genero {
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $Id;
    #[Column(type: 'string', nullale: false)]
    private string $Nome;
 
    public function getId() : int {
        return $this->Id;
    }
    public function setId(int $Id) : void {
        $this->Id = $Id;
    }
    public function getNome() : string {
        return $this->Nome;
    }
    public function setNome(string $Nome) : void {
        $this->Nome = $Nome;
    }
}