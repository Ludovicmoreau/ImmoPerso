<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Type;

/**
 * @ORM\Entity
 */
class House
{
    //Add createdAt

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
     * Get id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return House
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get numberOfRoom
     *
     * @return int
     */
    public function getNumberOfRoom()
    {
        return $this->numberOfRoom;
    }

    /**
     * @param int $numberOfRoom
     *
     * @return House
     */
    public function setNumberOfRoom(int $numberOfRoom): House
    {
        $this->numberOfRoom = $numberOfRoom;

        return $this;
    }

    /**
     * Get superficy
     *
     * @return int
     */
    public function getSuperficy()
    {
        return $this->superficy;
    }

    /**
     * @param int $superficy
     *
     * @return House
     */
    public function setSuperficy(int $superficy): House
    {
        $this->superficy = $superficy;

        return $this;
    }

    /**
     * Get haveWorksToDoInside
     *
     * @return bool
     */
    public function isHaveWorksToDoInside()
    {
        return $this->haveWorksToDoInside;
    }

    /**
     * @param bool $haveWorksToDoInside
     *
     * @return House
     */
    public function setHaveWorksToDoInside(bool $haveWorksToDoInside): House
    {
        $this->haveWorksToDoInside = $haveWorksToDoInside;

        return $this;
    }

    /**
     * Get openKitchen
     *
     * @return bool
     */
    public function isOpenKitchen()
    {
        return $this->openKitchen;
    }

    /**
     * @param bool $openKitchen
     *
     * @return House
     */
    public function setOpenKitchen(bool $openKitchen): House
    {
        $this->openKitchen = $openKitchen;

        return $this;
    }

    /**
     * Get nearRER
     *
     * @return bool
     */
    public function isNearRER()
    {
        return $this->nearRER;
    }

    /**
     * @param bool $nearRER
     *
     * @return House
     */
    public function setNearRER(bool $nearRER): House
    {
        $this->nearRER = $nearRER;

        return $this;
    }

    /**
     * Get travelTimeToJob
     *
     * @return int
     */
    public function getTravelTimeToJob()
    {
        return $this->travelTimeToJob;
    }

    /**
     * @param int $travelTimeToJob
     *
     * @return House
     */
    public function setTravelTimeToJob(int $travelTimeToJob): House
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
     * @param mixed $adress
     *
     * @return House
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
     * @param mixed $city
     *
     * @return House
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }




}