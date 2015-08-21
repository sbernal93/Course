<?php
/**
 * Created by PhpStorm.
 * User: Santiago
 * Date: 8/21/2015
 * Time: 1:10 PM
 */

namespace AppBundle\Repository\Doctrine\Orm;


use Doctrine\ORM\EntityRepository;

abstract class AbstractBaseRepository extends EntityRepository
{
    /**
     * @param object $entity
     * @param bool   $sync
     *
     * @return int
     */
    public function update($entity, $sync = true)
    {
        return $this->add($entity, $sync);
    }
    /**
     * @param object $entity
     * @param bool   $sync
     *
     * @return int
     */
    public function add($entity, $sync = true)
    {
        $this->_em->persist($entity);
        if ($sync === true) {
            $this->_em->flush();
        }
        return $entity->getId();
    }
    /**
     * @param object $entity
     * @param bool   $sync
     */
    public function remove($entity, $sync = true)
    {
        $this->_em->remove($entity);
        if ($sync === true) {
            $this->_em->flush();
        }
    }
}