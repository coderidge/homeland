<?php
namespace Registration\RegBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="Registrations")
 */
class Registrations
{
    /**
      * @ORM\Id
     * @var int
     */
    private $id;

    /**
       * @ORM\Column(type="string", length=255, unique=true)
     * @var string
     * @Assert\NotBlank()
     */
    private $name;

    /**
      * @ORM\Column(type="string", length=255, unique=true)
     * @var string
     * @Assert\Type(
     *     type="string",
     *     message="Your name cannot contain a number"
     * )
     */
      
    private $sex;

   /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Type(
     *     type="integer",
    *       
     *     message="The value {{ age }} is not a valid {{ integer }}."
     * )
     */
    private $age;

     /**
       * @ORM\Column(type="integer", length=10, unique=true)
     * @var string
     * @Assert\NotBlank()
     */
    private $country;

    /**
     * @var \DateTime
     */
    private $dateCreated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Registrations
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Registrations
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Registrations
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Registrations
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Registrations
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}

