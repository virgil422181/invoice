<?php

namespace OnlineAdv\InvoiceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use OnlineAdv\UsersBundle\Entity\User as User;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="OnlineAdv\InvoiceBundle\Repository\CompanyRepository")
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
     * @ORM\Column(name="tip", type="integer")
     */
    private $tip;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="cif", type="integer", unique=true)
     */
    private $cif;

     /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="fax", type="integer", nullable=true)
     */
    private $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_id", type="string", length=255, nullable=true)
     */
    private $registrationId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_status", type="text")
     */
    private $companyStatus;


    /**
     * @var bool
     *
     * @ORM\Column(name="vat", type="boolean")
     */
    private $vat;

    /**
     * @var int
     *
     * @ORM\Column(name="zip", type="integer", nullable=true)
     */
    private $zip;

    /**
     * @ORM\OneToMany(targetEntity="OnlineAdv\UsersBundle\Entity\User", mappedBy="company")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * Set cif
     *
     * @param integer $cif
     * @return Company
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return integer 
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
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
     * Set fax
     *
     * @param integer $fax
     * @return Company
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Company
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set registrationId
     *
     * @param string $registrationId
     * @return Company
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;

        return $this;
    }

    /**
     * Get registrationId
     *
     * @return string 
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
    }

    /**
     * Set companyStatus
     *
     * @param string $companyStatus
     * @return Company
     */
    public function setCompanyStatus($companyStatus)
    {
        $this->companyStatus = $companyStatus;

        return $this;
    }

    /**
     * Get companyStatus
     *
     * @return string 
     */
    public function getCompanyStatus()
    {
        return $this->companyStatus;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Company
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set vat
     *
     * @param boolean $vat
     * @return Company
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return boolean 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     * @return Company
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return mixed
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * @param mixed $tip
     */
    public function setTip($tip)
    {
        $this->tip = $tip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User $users
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
        return $this;
    }

}
