<?php

namespace Core\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="tb_seg_config", options={"collate"="utf8_general_ci", "charset"="utf8", "engine"="MyISAM"})
 * @ORM\Entity
 */
class Config
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
     * @ORM\Column(name="chr_name", type="string", length=100)
     */
    private $chrName;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_value", type="string", length=255, nullable=true)
     */
    private $chrValue;


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
     * Set chrName
     *
     * @param string $chrName
     * @return Config
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
     * @return Config
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
}
