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
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="link", type="string", length=20, nullable=false)
     *
     * @var string
     */
    protected $link;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="websites")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *
     * @var int
     */
    protected $userId;

    /**
     * Website constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }




}