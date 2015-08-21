<?php
/**
 * Created by PhpStorm.
 * User: Santiago
 * Date: 8/21/2015
 * Time: 1:06 PM
 */

namespace AppBundle\Interfaces\Repository;


interface RepositoryInterface
{
    /**
     * @param $id
     *
     * @return object
     */
    public function find($id);
    /**
     * @return array|null
     */
    public function findAll();
    /**
     * @param array      $criteria
     * @param array|null $orderBy
     * @param int|null   $limit
     * @param int|null   $offset
     *
     * @return array|null
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
    /**
     * @param array $criteria
     *
     * @return object
     */
    public function findOneBy(array $criteria);
    /**
     * @param object $entity
     * @param bool   $sync
     */
    public function add($entity, $sync = true);
    /**
     * @param object $entity
     * @param bool   $sync
     */
    public function update($entity, $sync = true);
    /**
     * @param object $entity
     * @param bool   $sync
     */
    public function remove($entity, $sync = true);
}