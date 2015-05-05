<?php

namespace Apartment\ApartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rooms
 */
class Rooms
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $propertyId;

    /**
     * @var string
     */
    private $roomType;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime
     */
    private $dateTo;

    /**
     * @var integer
     */
    private $maxChildAge;

    /**
     * @var integer
     */
    private $minChildAge;

    /**
     * @var integer
     */
    private $maxChildren;

    /**
     * @var integer
     */
    private $isAvailable;

    /**
     * @var string
     */
    private $descriptionEn;

    /**
     * @var string
     */
    private $acceptedGender;

    /**
     * @var string
     */
    private $blockName;


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
     * Set propertyId
     *
     * @param integer $propertyId
     * @return Rooms
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    /**
     * Get propertyId
     *
     * @return integer 
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Set roomType
     *
     * @param string $roomType
     * @return Rooms
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType
     *
     * @return string 
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Rooms
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Rooms
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return Rooms
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set maxChildAge
     *
     * @param integer $maxChildAge
     * @return Rooms
     */
    public function setMaxChildAge($maxChildAge)
    {
        $this->maxChildAge = $maxChildAge;

        return $this;
    }

    /**
     * Get maxChildAge
     *
     * @return integer 
     */
    public function getMaxChildAge()
    {
        return $this->maxChildAge;
    }

    /**
     * Set minChildAge
     *
     * @param integer $minChildAge
     * @return Rooms
     */
    public function setMinChildAge($minChildAge)
    {
        $this->minChildAge = $minChildAge;

        return $this;
    }

    /**
     * Get minChildAge
     *
     * @return integer 
     */
    public function getMinChildAge()
    {
        return $this->minChildAge;
    }

    /**
     * Set maxChildren
     *
     * @param integer $maxChildren
     * @return Rooms
     */
    public function setMaxChildren($maxChildren)
    {
        $this->maxChildren = $maxChildren;

        return $this;
    }

    /**
     * Get maxChildren
     *
     * @return integer 
     */
    public function getMaxChildren()
    {
        return $this->maxChildren;
    }

    /**
     * Set isAvailable
     *
     * @param integer $isAvailable
     * @return Rooms
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return integer 
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Rooms
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set acceptedGender
     *
     * @param string $acceptedGender
     * @return Rooms
     */
    public function setAcceptedGender($acceptedGender)
    {
        $this->acceptedGender = $acceptedGender;

        return $this;
    }

    /**
     * Get acceptedGender
     *
     * @return string 
     */
    public function getAcceptedGender()
    {
        return $this->acceptedGender;
    }

    /**
     * Set blockName
     *
     * @param string $blockName
     * @return Rooms
     */
    public function setBlockName($blockName)
    {
        $this->blockName = $blockName;

        return $this;
    }

    /**
     * Get blockName
     *
     * @return string 
     */
    public function getBlockName()
    {
        return $this->blockName;
    }
}
