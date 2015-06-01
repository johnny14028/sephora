<?php

namespace Core\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigLog
 *
 * @ORM\Table(name="tb_seg_config_log", options={"collate"="utf8_general_ci", "charset"="utf8", "engine"="MyISAM"})
 * @ORM\Entity
 */
class ConfigLog
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
     * @var integer
     *
     * @ORM\Column(name="int_userid", type="integer", nullable=true)
     */
    private $intUserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="int_timemodified", type="integer", nullable=true)
     */
    private $intTimemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_name", type="string", length=100, nullable=true)
     */
    private $chrName;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_value", type="string", length=255, nullable=true)
     */
    private $chrValue;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_oldvalue", type="string", length=255, nullable=true)
     */
    private $chrOldvalue;


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
     * Set intUserid
     *
     * @param integer $intUserid
     * @return ConfigLog
     */
    public function setIntUserid($intUserid)
    {
        $this->intUserid = $intUserid;

        return $this;
    }

    /**
     * Get intUserid
     *
     * @return integer 
     */
    public function getIntUserid()
    {
        return $this->intUserid;
    }

    /**
     * Set intTimemodified
     *
     * @param integer $intTimemodified
     * @return ConfigLog
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

    /**
     * Set chrName
     *
     * @param string $chrName
     * @return ConfigLog
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
     * Set chrValue
     *
     * @param string $chrValue
     * @return ConfigLog
     */
    public function setChrValue($chrValue)
    {
        $this->chrValue = $chrValue;

        return $this;
    }

    /**
     * Get chrValue
     *
     * @return string 
     */
    public function getChrValue()
    {
        return $this->chrValue;
    }

    /**
     * Set chrOldvalue
     *
     * @param string $chrOldvalue
     * @return ConfigLog
     */
    public function setChrOldvalue($chrOldvalue)
    {
        $this->chrOldvalue = $chrOldvalue;

        return $this;
    }

    /**
     * Get chrOldvalue
     *
     * @return string 
     */
    public function getChrOldvalue()
    {
        return $this->chrOldvalue;
    }
}
