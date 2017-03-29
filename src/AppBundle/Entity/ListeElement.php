<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ListeElement
 *
 * @ORM\Table(name="liste_element")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ListeElementRepository")
 */
class ListeElement
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
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Element", mappedBy="listElements")
     */
    private $elements;

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
     * Set valeur
     *
     * @param string $valeur
     *
     * @return ListeElement
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    function __toString()
    {
        return $this->getValeur();
    }

    /**
     * @return ArrayCollection
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param ArrayCollection $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

}
