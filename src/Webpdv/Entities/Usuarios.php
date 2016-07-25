<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/07/16
 * Time: 10:04
 */

namespace Webpdv\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Usuarios
 * @ORM\Entity(repositoryClass="Webpdv\Repositories\UsuariosRepositorio")
 * @ORM\Table(name="usuarios")
 */
class Usuarios
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="nome", type="string", length=80)
     * @var string
     */
    private $nome;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
}