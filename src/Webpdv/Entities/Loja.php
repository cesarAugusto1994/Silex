<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 18/07/16
 * Time: 09:57
 */

namespace Webpdv\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Loja
 * @package Webpdv\Entities
 * @ORM\Entity(repositoryClass="\Webpdv\Repositories\LojaRepository")
 * @ORM\Table(name="loja")
 */
class Loja
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="nome", type="string")
     * @var string
     */
    private $nome;

    /**
     * @ORM\Column(name="abreviacao", type="string")
     * @var string
     */
    private $abreviacao;

    /**
     * @return mixed
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
     * @return string
     */
    public function getAbreviacao()
    {
        return $this->abreviacao;
    }

    /**
     * @param string $abreviacao
     */
    public function setAbreviacao($abreviacao)
    {
        $this->abreviacao = $abreviacao;
    }
}