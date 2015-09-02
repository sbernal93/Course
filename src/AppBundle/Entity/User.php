<?php
/**
 * Created by PhpStorm.
 * User: Santiago
 * Date: 8/21/2015
 * Time: 1:13 PM
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Class User
 *
 * @package AppBundle\Entity
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Doctrine\Orm\UserRepository")
 * @UniqueEntity("name")
 */
class User
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     *
     * @var string
     */
    protected $username;

    /**
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     *
     * @var string
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="Website", mappedBy="user")
     *
     * @var ArrayCollection
     */
    protected $websites;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->websites = new ArrayCollection();
    }

    /**
     *
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return ArrayCollection
     */
    public function getWebsites()
    {
        return $this->websites;
    }
    /**
     * @param Website $website
     */
    public function addWebsite(Website $website)
    {
        $this->websites->add($website);
    }
    /**
     * @param Website $website
     */
    public function removeWebsite(Website $website)
    {
        $this->websites->removeElement($website);
    }


}