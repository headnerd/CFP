<?php
// src/Cfp/CfpBundle/Entity/Cfp.php

namespace Cfp\CfpBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cfp\CfpBundle\Repository\CfpRepository")
 * @ORM\Table(name="cfp")
 */
class Cfp
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
     * @ORM\ManyToOne(targetEntity="Cfp\ConferenceBundle\Entity\Conference")
     */
    protected $conference;

    /**
     * @ORM\ManyToOne(targetEntity="Cfp\UserBundle\Entity\User", inversedBy="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="text", length="1024")
     */
    protected $remarks;

    /**
     * @ORM\OneToMany(targetEntity="Cfp\CfpBundle\Entity\CfpTalk", mappedBy="cfp")
     */
    protected $cfp_talks;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_created;



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
     * Set remarks
     *
     * @param text $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * Get remarks
     *
     * @return text 
     */
    public function getRemarks()
    {
        return $this->remarks;
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
     * Set conference
     *
     * @param Cfp\ConferenceBundle\Entity\Conference $conference
     */
    public function setConference(\Cfp\ConferenceBundle\Entity\Conference $conference)
    {
        $this->conference = $conference;
    }

    /**
     * Get conference
     *
     * @return Cfp\ConferenceBundle\Entity\Conference 
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * Set user
     *
     * @param Cfp\UserBundle\Entity\User $user
     */
    public function setUser(\Cfp\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Cfp\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add cfp_talks
     *
     * @param Cfp\CfpBundle\Entity\CfpTalk $cfpTalks
     */
    public function addCfpTalk(\Cfp\CfpBundle\Entity\CfpTalk $cfpTalks)
    {
        $this->cfp_talks[] = $cfpTalks;
    }

    /**
     * Get cfp_talks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCfpTalks()
    {
        return $this->cfp_talks;
    }
}