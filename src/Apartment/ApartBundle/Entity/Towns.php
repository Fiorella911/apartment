<?php

namespace Apartment\ApartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Towns
 */
class Towns
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $countryId;

    /**
     * @var string
     */
    private $nameEn;

    /**
     * @var integer
     */
    private $isVisible;


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
     * Set countryId
     *
     * @param integer $countryId
     * @return Towns
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set nameEn
     *
     * @param string $nameEn
     * @return Towns
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
     * @return Towns
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
     * @var \Apartment\ApartBundle\Entity\Countries
     */
    private $countries;


    /**
     * Set countries
     *
     * @param \Apartment\ApartBundle\Entity\Countries $countries
     * @return Towns
     */
    public function setCountries(\Apartment\ApartBundle\Entity\Countries $countries = null)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries
     *
     * @return \Apartment\ApartBundle\Entity\Countries 
     */
    public function getCountries()
    {
        return $this->countries;
    }
}
