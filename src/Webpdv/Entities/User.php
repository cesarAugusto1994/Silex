<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 01/07/16
 * Time: 15:59
 */

namespace Webpdv\Entities;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Webpdv\Repositories;

/**
 * Class User
 * @package Webpdv\Entities
 * @ORM\Entity(repositoryClass="\Webpdv\Repositories\UserRepository")
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;
    /**
     * @ORM\Column(name="username", type="string", length=80)
     * @var string
     */
    private $username;
    /**
     * @ORM\ManyToOne(targetEntity="Loja", cascade={"persist"})
     * @ORM\JoinColumn(name="loja_id", referencedColumnName="id")
     * @var Loja
     */
    private $loja;
    /**
     * @ORM\Column(name="email", type="string", length=80, unique=true)
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(name="roles", type="string")
     * @var string
     */
    private $roles;

    /**
     * @ORM\Column(name="login", type="string", length=50)
     * @var
     */
    private $login;
    /**
     * @ORM\Column(name="password", type="string", length=50)
     * @var string
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity="Cargo", cascade={"persist"})
     * @ORM\JoinColumn(name="cargo_id", referencedColumnName="id")
     * @var User
     */
    private $cargo;

    /**
     * @ORM\Column(type="datetime")
     * @var \Datetime
     */
    protected $created;
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @var \Datetime
     */
    protected $updated;
    /**
     * @ORM\Column(name="active", type="smallint")
     *
     * @var int
     */
    private $active;

    /**
     * @ORM\Column(name="avatar", type="text")
     * @var string
     */
    private $avatar;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        return $this->username = filter_var($username, FILTER_SANITIZE_STRING);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (FALSE === filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('INVALID EMAIL');
        }
        return $this->email = $email;
    }
    
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getCreated()
    {
        return $this->created->format('Y-m-d H:i:s');
    }

    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = \DateTime::createFromFormat('Y-m-d H:i:s', $updated);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @Assert\IsTrue(message="The password cannot match your username", groups={"Strict"})
     */
    public function isPasswordLegal()
    {
        return ($this->username !== $this->password);
    }

    /**
     * @param int $loja
     */
    public function setLoja($loja)
    {
        $this->loja = $loja;
    }
    
    /**
     * @return int
     */
    public function getLoja()
    {
        return $this->loja;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function isActive()
    {
        if(!$this->active){
            return 'Inativo';
        }
        return 'Ativo';
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
