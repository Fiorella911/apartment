<?php

namespace Apartment\ApartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 */
class Countries
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $abbr;

    /**
     * @var string
     */
    private $nameEn;

    /**
     * @var integer
     */
    private $isVisible;

    /**
     * @var integer
     */
    private $currId;
    
    function __toString()
    {
        return $this->abbr ? $this->abbr : 'Countries';
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set abbr
     *
     * @param string $abbr
     * @return Countries
     */
    public function setAbbr($abbr)
    {
        $this->abbr = $abbr;

        return $this;
    }

    /**
     * Get abbr
     *
     * @return string 
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * Set nameEn
     *
     * @param string $nameEn
     * @return Countries
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set isVisible
     *
     * @param integer $isVisible
     * @return Countries
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    /**
     * Get isVisible
     *
     * @return integer 
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Set currId
     *
     * @param integer $currId
     * @return Countries
     */
    public function setCurrId($currId)
    {
        $this->currId = $currId;

        return $this;
    }

    /**
     * Get currId
     *
     * @return integer 
     */
    public function getCurrId()
    {
        return $this->currId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $towns;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->towns = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add towns
     *
     * @param \Apartment\ApartBundle\Entity\Towns $towns
     * @return Countries
     */
    public function addTown(\Apartment\ApartBundle\Entity\Towns $towns)
    {
        $this->towns[] = $towns;

        return $this;
    }

    /**
     * Remove towns
     *
     * @param \Apartment\ApartBundle\Entity\Towns $towns
     */
    public function removeTown(\Apartment\ApartBundle\Entity\Towns $towns)
    {
        $this->towns->removeElement($towns);
    }

    /**
     * Get towns
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTowns()
    {
        return $this->towns;
    }
}
