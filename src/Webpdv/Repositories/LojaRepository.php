<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 04/07/16
 * Time: 11:34
 */
namespace Webpdv\Repositories;

use Webpdv\Entities;
use Doctrine\ORM\EntityRepository;

/**
 * Class LojaRepository
 * @package Webpdv\Entities
 */
class LojaRepository extends EntityRepository
{
    /**
     * @param Entities\Loja $loja
     */
    public function save(Entities\Loja $loja)
    {
        $this->getEntityManager()->persist($loja);
        $this->getEntityManager()->flush($loja);
    }
    
}