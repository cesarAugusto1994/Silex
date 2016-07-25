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
 * Class EmailConfirmationRepository
 * @package Application\Entity
 */
class EmailConfirmationRepository extends EntityRepository
{
    /**
     * @param Entities\EmailConfirmation $email
     */
    public function save(Entities\EmailConfirmation $email)
    {
        $this->getEntityManager()->persist($email);
        $this->getEntityManager()->flush($email);
    }
}