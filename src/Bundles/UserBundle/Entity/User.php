<?php

namespace Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

//    /**
//     * @var string
//     */
//    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

//    /**
//     * Set name
//     *
//     * @param string $name
//     * @return User
//     */
//    public function setName($name)
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    /**
//     * Get name
//     *
//     * @return string 
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
    // /**
    //  * @var \Doctrine\Common\Collections\Collection
    //  */
    // protected $groups;

    // /**
    //  * Constructor
    //  */
    // public function __construct()
    // {
    //     $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    // }

    // /**
    //  * Add groups
    //  *
    //  * @param \Bundles\UserBundle\Entity\Role $groups
    //  * @return User
    //  */
    // public function addGroup(\Bundles\UserBundle\Entity\Role $groups)
    // {
    //     $this->groups[] = $groups;

    //     return $this;
    // }

    // /**
    //  * Remove groups
    //  *
    //  * @param \Bundles\UserBundle\Entity\Role $groups
    //  */
    // public function removeGroup(\Bundles\UserBundle\Entity\Role $groups)
    // {
    //     $this->groups->removeElement($groups);
    // }

    // /**
    //  * Get groups
    //  *
    //  * @return \Doctrine\Common\Collections\Collection 
    //  */
    // public function getGroups()
    // {
    //     return $this->groups;
    // }
}
