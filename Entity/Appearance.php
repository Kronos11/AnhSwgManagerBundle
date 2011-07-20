<?php
/**
 * Represents a cluster being managed by the server directory.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="appearance")
 */
class Appearance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    // Appearance columns here.
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $baseModel;

    /**
     * @ORM\Column(type="float")
     */
    protected $scale;

    /**
     * @ORM\OneToOne(targetEntity="Entity")
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     */
    protected $entity;

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
     * Set baseModel
     *
     * @param string $baseModel
     */
    public function setBaseModel($baseModel)
    {
        $this->baseModel = $baseModel;
    }

    /**
     * Get baseModel
     *
     * @return string 
     */
    public function getBaseModel()
    {
        return $this->baseModel;
    }

    /**
     * Set scale
     *
     * @param float $scale
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }

    /**
     * Get scale
     *
     * @return float 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set entity
     *
     * @param Anh\SwgManagerBundle\Entity\Entity $entity
     */
    public function setEntity(\Anh\SwgManagerBundle\Entity\Entity $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Get entity
     *
     * @return Anh\SwgManagerBundle\Entity\Entity 
     */
    public function getEntity()
    {
        return $this->entity;
    }
}