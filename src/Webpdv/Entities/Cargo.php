<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 14:58
 */

namespace Webpdv\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class EmailConfirmation
 * @package Webpdv\Entities
 * @ORM\Entity(repositoryClass="Webpdv\Repositories\CargoRepository")
 * @ORM\Table(name="cargo")
 */
class Cargo
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="nome", type="string", length=60)
     * @var string
     */
    private $nome;
    
    /**
     * @ORM\Column(name="ativo", type="smallint")
     * @var integer
     */
    private $ativo;

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

    /**
     * @return int
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param int $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    
}
