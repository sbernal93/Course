<?php
/**
 * Created by PhpStorm.
 * User: Santiago
 * Date: 8/21/2015
 * Time: 1:19 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Class User
 *
 * @package AppBundle\Entity
 *
 * @ORM\Table(name="websites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Doctrine\Orm\WebsiteRepository")
 */
class Website
{
    protected $id;
    protected $link;

    /**
     * Website constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }


}