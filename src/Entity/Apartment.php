<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Type;

/**
 * @ORM\Entity
 */
class Apartment
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @Type("integer")
     */
    protected $floor;


    /**
     * @ORM\Column(type="integer")
     * @Type("integer")
     */
    protected $numberOfRoom;

    /**
     * @ORM\Column(type="integer")
     * @Type("integer")
     */
    protected $superficy;

    /**
     * @ORM\Column(type="boolean")
     * @Type("boolean")
     */
    protected $haveWorksToDoInside;

    /**
     * @ORM\Column(type="boolean")
     * @Type("boolean")
     */
    protected $openKitchen;

    /**
     * @ORM\Column(type="boolean")
     * @Type("boolean")
     */
    protected $nearRER;

    /**
     * @ORM\Column(type="integer")
     * @Type("integer")
     */
    protected $travelTimeToJob;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $city;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="appartments")
     */
    protected $user;

    /**
     * @ORM\Column(type="integer", nullable= false)
     * @Type("integer")
     */
    protected $priority;

    /**
     * Get id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param mixed $id
     *
     * @return Apartment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get floor
     *
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set floor
     *
     * @param mixed $floor
     *
     * @return Apartment
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get numberOfRoom
     *
     * @return mixed
     */
    public function getNumberOfRoom()
    {
        return $this->numberOfRoom;
    }

    /**
     * Set numberOfRoom
     *
     * @param mixed $numberOfRoom
     *
     * @return Apartment
     */
    public function setNumberOfRoom($numberOfRoom)
    {
        $this->numberOfRoom = $numberOfRoom;

        return $this;
    }

    /**
     * Get superficy
     *
     * @return mixed
     */
    public function getSuperficy()
    {
        return $this->superficy;
    }

    /**
     * Set superficy
     *
     * @param mixed $superficy
     *
     * @return Apartment
     */
    public function setSuperficy($superficy)
    {
        $this->superficy = $superficy;

        return $this;
    }

    /**
     * Get haveWorksToDoInside
     *
     * @return mixed
     */
    public function getHaveWorksToDoInside()
    {
        return $this->haveWorksToDoInside;
    }

    /**
     * Set haveWorksToDoInside
     *
     * @param mixed $haveWorksToDoInside
     *
     * @return Apartment
     */
    public function setHaveWorksToDoInside($haveWorksToDoInside)
    {
        $this->haveWorksToDoInside = $haveWorksToDoInside;

        return $this;
    }

    /**
     * Get openKitchen
     *
     * @return mixed
     */
    public function getOpenKitchen()
    {
        return $this->openKitchen;
    }

    /**
     * Set openKitchen
     *
     * @param mixed $openKitchen
     *
     * @return Apartment
     */
    public function setOpenKitchen($openKitchen)
    {
        $this->openKitchen = $openKitchen;

        return $this;
    }

    /**
     * Get nearRER
     *
     * @return mixed
     */
    public function getNearRER()
    {
        return $this->nearRER;
    }

    /**
     * Set nearRER
     *
     * @param mixed $nearRER
     *
     * @return Apartment
     */
    public function setNearRER($nearRER)
    {
        $this->nearRER = $nearRER;

        return $this;
    }

    /**
     * Get travelTimeToJob
     *
     * @return mixed
     */
    public function getTravelTimeToJob()
    {
        return $this->travelTimeToJob;
    }

    /**
     * Set travelTimeToJob
     *
     * @param mixed $travelTimeToJob
     *
     * @return Apartment
     */
    public function setTravelTimeToJob($travelTimeToJob)
    {
        $this->travelTimeToJob = $travelTimeToJob;

        return $this;
    }

    /**
     * Get adress
     *
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set adress
     *
     * @param mixed $adress
     *
     * @return Apartment
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get city
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param mixed $city
     *
     * @return Apartment
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt
     *
     * @param mixed $createdAt
     *
     * @return Apartment
     */
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get user
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     *
     * @return Apartment
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return Apartment
     */
    public function setPriority($priority): Apartment
    {
        $this->priority = $priority;

        return $this;
    }

}