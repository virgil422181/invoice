<?php

namespace OnlineAdv\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OnlineAdv\UsersBundle\Entity\User;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="OnlineAdv\CMSBundle\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cui", type="string", length=15)
     */
    private $cui;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="banca", type="string", length=255)
     */
    private $banca;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=255)
     */
    private $iban;

    private $user
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
     * Set name
     *
     * @param string $name
     * @return Company
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
     * Set cui
     *
     * @param string $cui
     * @return Company
     */
    public function setCui($cui)
    {
        $this->cui = $cui;

        return $this;
    }

    /**
     * Get cui
     *
     * @return string 
     */
    public function getCui()
    {
        return $this->cui;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Company
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set banca
     *
     * @param string $banca
     * @return Company
     */
    public function setBanca($banca)
    {
        $this->banca = $banca;

        return $this;
    }

    /**
     * Get banca
     *
     * @return string 
     */
    public function getBanca()
    {
        return $this->banca;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Company
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string 
     */
    public function getIban()
    {
        return $this->iban;
    }
}
