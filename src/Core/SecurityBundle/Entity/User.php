<?php

namespace Core\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="tb_seg_user", options={"collate"="utf8_general_ci", "charset"="utf8", "engine"="MyISAM"})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_username", type="string", length=100)
     */
    private $chrUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_password", type="string", length=100)
     */
    private $chrPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_confirmed", type="integer", nullable=true)
     */
    private $intConfirmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_deleted", type="integer", nullable=true)
     */
    private $intDeleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_suspended", type="integer", nullable=true)
     */
    private $intSuspended;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_name", type="string", length=255, nullable=true)
     */
    private $chrName;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_lastname", type="string", length=255, nullable=true)
     */
    private $chrLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_email", type="string", length=255, nullable=true)
     */
    private $chrEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_phone", type="string", length=255, nullable=true)
     */
    private $chrPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_firstaccess", type="integer", nullable=true)
     */
    private $intFirstaccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_lastaccess", type="integer", nullable=true)
     */
    private $intLastaccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_lastlogin", type="integer", nullable=true)
     */
    private $intLastlogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_timecreated", type="integer", nullable=true)
     */
    private $intTimecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_timemodified", type="integer", nullable=true)
     */
    private $intTimemodified;


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
     * Set chrUsername
     *
     * @param string $chrUsername
     * @return User
     */
    public function setChrUsername($chrUsername)
    {
        $this->chrUsername = $chrUsername;

        return $this;
    }

    /**
     * Get chrUsername
     *
     * @return string 
     */
    public function getChrUsername()
    {
        return $this->chrUsername;
    }

    /**
     * Set chrPassword
     *
     * @param string $chrPassword
     * @return User
     */
    public function setChrPassword($chrPassword)
    {
        $this->chrPassword = $chrPassword;

        return $this;
    }

    /**
     * Get chrPassword
     *
     * @return string 
     */
    public function getChrPassword()
    {
        return $this->chrPassword;
    }

    /**
     * Set intConfirmed
     *
     * @param integer $intConfirmed
     * @return User
     */
    public function setIntConfirmed($intConfirmed)
    {
        $this->intConfirmed = $intConfirmed;

        return $this;
    }

    /**
     * Get intConfirmed
     *
     * @return integer 
     */
    public function getIntConfirmed()
    {
        return $this->intConfirmed;
    }

    /**
     * Set intDeleted
     *
     * @param integer $intDeleted
     * @return User
     */
    public function setIntDeleted($intDeleted)
    {
        $this->intDeleted = $intDeleted;

        return $this;
    }

    /**
     * Get intDeleted
     *
     * @return integer 
     */
    public function getIntDeleted()
    {
        return $this->intDeleted;
    }

    /**
     * Set intSuspended
     *
     * @param integer $intSuspended
     * @return User
     */
    public function setIntSuspended($intSuspended)
    {
        $this->intSuspended = $intSuspended;

        return $this;
    }

    /**
     * Get intSuspended
     *
     * @return integer 
     */
    public function getIntSuspended()
    {
        return $this->intSuspended;
    }

    /**
     * Set chrName
     *
     * @param string $chrName
     * @return User
     */
    public function setChrName($chrName)
    {
        $this->chrName = $chrName;

        return $this;
    }

    /**
     * Get chrName
     *
     * @return string 
     */
    public function getChrName()
    {
        return $this->chrName;
    }

    /**
     * Set chrLastname
     *
     * @param string $chrLastname
     * @return User
     */
    public function setChrLastname($chrLastname)
    {
        $this->chrLastname = $chrLastname;

        return $this;
    }

    /**
     * Get chrLastname
     *
     * @return string 
     */
    public function getChrLastname()
    {
        return $this->chrLastname;
    }

    /**
     * Set chrEmail
     *
     * @param string $chrEmail
     * @return User
     */
    public function setChrEmail($chrEmail)
    {
        $this->chrEmail = $chrEmail;

        return $this;
    }

    /**
     * Get chrEmail
     *
     * @return string 
     */
    public function getChrEmail()
    {
        return $this->chrEmail;
    }

    /**
     * Set chrPhone
     *
     * @param string $chrPhone
     * @return User
     */
    public function setChrPhone($chrPhone)
    {
        $this->chrPhone = $chrPhone;

        return $this;
    }

    /**
     * Get chrPhone
     *
     * @return string 
     */
    public function getChrPhone()
    {
        return $this->chrPhone;
    }

    /**
     * Set intFirstaccess
     *
     * @param integer $intFirstaccess
     * @return User
     */
    public function setIntFirstaccess($intFirstaccess)
    {
        $this->intFirstaccess = $intFirstaccess;

        return $this;
    }

    /**
     * Get intFirstaccess
     *
     * @return integer 
     */
    public function getIntFirstaccess()
    {
        return $this->intFirstaccess;
    }

    /**
     * Set intLastaccess
     *
     * @param integer $intLastaccess
     * @return User
     */
    public function setIntLastaccess($intLastaccess)
    {
        $this->intLastaccess = $intLastaccess;

        return $this;
    }

    /**
     * Get intLastaccess
     *
     * @return integer 
     */
    public function getIntLastaccess()
    {
        return $this->intLastaccess;
    }

    /**
     * Set intLastlogin
     *
     * @param integer $intLastlogin
     * @return User
     */
    public function setIntLastlogin($intLastlogin)
    {
        $this->intLastlogin = $intLastlogin;

        return $this;
    }

    /**
     * Get intLastlogin
     *
     * @return integer 
     */
    public function getIntLastlogin()
    {
        return $this->intLastlogin;
    }

    /**
     * Set intTimecreated
     *
     * @param integer $intTimecreated
     * @return User
     */
    public function setIntTimecreated($intTimecreated)
    {
        $this->intTimecreated = $intTimecreated;

        return $this;
    }

    /**
     * Get intTimecreated
     *
     * @return integer 
     */
    public function getIntTimecreated()
    {
        return $this->intTimecreated;
    }

    /**
     * Set intTimemodified
     *
     * @param integer $intTimemodified
     * @return User
     */
    public function setIntTimemodified($intTimemodified)
    {
        $this->intTimemodified = $intTimemodified;

        return $this;
    }

    /**
     * Get intTimemodified
     *
     * @return integer 
     */
    public function getIntTimemodified()
    {
        return $this->intTimemodified;
    }
}
