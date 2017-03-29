<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ElementRepository")
 */
class Element
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
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="obligatoire", type="boolean")
     */
    private $obligatoire;
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeElement")
     * @ORM\JoinColumn(name="id_typeElement", referencedColumnName="id")
    */
    private $typeElement;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="ListeElement", inversedBy="elements")
     * @ORM\JoinColumn(name="id_listElement", referencedColumnName="id")
     */
    private $listElements;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Element
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set obligatoire
     *
     * @param boolean $obligatoire
     *
     * @return Element
     */
    public function setObligatoire($obligatoire)
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }

    /**
     * Get obligatoire
     *
     * @return bool
     */
    public function getObligatoire()
    {
        return $this->obligatoire;
    }

    /**
     * Set typeElement
     *
     * @param \AppBundle\Entity\TypeElement $typeElement
     *
     * @return Element
     */
    public function setTypeElement(\AppBundle\Entity\TypeElement $typeElement = null)
    {
        $this->typeElement = $typeElement;

        return $this;
    }

    /**
     * Get typeElement
     *
     * @return \AppBundle\Entity\typeElement
     */
    public function getTypeElement()
    {
        return $this->typeElement;
    }

    /**
     * @return ArrayCollection
     */
    public function getListElements()
    {
        return $this->listElements;
    }

    /**
     * @param ArrayCollection $listElements
     */
    public function setListElements($listElements)
    {
        $this->listElements = $listElements;
    }



}
