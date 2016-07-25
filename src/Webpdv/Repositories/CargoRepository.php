<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 15:23
 */

namespace Webpdv\Repositories;

use Doctrine\ORM\EntityRepository;
use Webpdv\Entities;

/**
 * Class CargoRepository
 * @package Webpdv\Repositories
 */
class CargoRepository extends EntityRepository
{
    /**
     * @param Entities\Cargo $cargo
     */
    public function save(Entities\Cargo $cargo)
    {
        $this->getEntityManager()->persist($cargo);
        $this->getEntityManager()->flush($cargo);
    }
}