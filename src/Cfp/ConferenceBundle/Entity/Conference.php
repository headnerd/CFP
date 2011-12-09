<?php
// src/Cfp/ConferenceBundle/Entity/Conference.php

namespace Cfp\ConferenceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cfp\ConferenceBundle\Repository\ConferenceRepository")
 * @ORM\Table(name="conference")
 * @ORM\HasLifecycleCallbacks()
 */
class Conference
{
    public function __construct()
    {
        $this->setDtCreated(new \DateTime());
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="50")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length="25")
     */
    protected $tag;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_start;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_end;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $cfp_start;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $cfp_end;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="decimal", precision="18", scale="12")
     */
    protected $geo_long;

    /**
     * @ORM\Column(type="decimal", precision="18", scale="12")
     */
    protected $geo_lat;


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set dt_created
     *
     * @param datetime $dtCreated
     */
    public function setDtCreated($dtCreated)
    {
        $this->dt_created = $dtCreated;
    }

    /**
     * Get dt_created
     *
     * @return datetime 
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }

    /**
     * Set dt_start
     *
     * @param datetime $dtStart
     */
    public function setDtStart($dtStart)
    {
        $this->dt_start = $dtStart;
    }

    /**
     * Get dt_start
     *
     * @return datetime 
     */
    public function getDtStart()
    {
        return $this->dt_start;
    }

    /**
     * Set dt_end
     *
     * @param datetime $dtEnd
     */
    public function setDtEnd($dtEnd)
    {
        $this->dt_end = $dtEnd;
    }

    /**
     * Get dt_end
     *
     * @return datetime 
     */
    public function getDtEnd()
    {
        return $this->dt_end;
    }

    /**
     * Set cfp_start
     *
     * @param datetime $cfpStart
     */
    public function setCfpStart($cfpStart)
    {
        $this->cfp_start = $cfpStart;
    }

    /**
     * Get cfp_start
     *
     * @return datetime 
     */
    public function getCfpStart()
    {
        return $this->cfp_start;
    }

    /**
     * Set cfp_end
     *
     * @param datetime $cfpEnd
     */
    public function setCfpEnd($cfpEnd)
    {
        $this->cfp_end = $cfpEnd;
    }

    /**
     * Get cfp_end
     *
     * @return datetime 
     */
    public function getCfpEnd()
    {
        return $this->cfp_end;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set geo_long
     *
     * @param decimal $geoLong
     */
    public function setGeoLong($geoLong)
    {
        $this->geo_long = $geoLong;
    }

    /**
     * Get geo_long
     *
     * @return decimal 
     */
    public function getGeoLong()
    {
        return $this->geo_long;
    }

    /**
     * Set geo_lat
     *
     * @param decimal $geoLat
     */
    public function setGeoLat($geoLat)
    {
        $this->geo_lat = $geoLat;
    }

    /**
     * Get geo_lat
     *
     * @return decimal 
     */
    public function getGeoLat()
    {
        return $this->geo_lat;
    }

    /**
     * Set tag
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}