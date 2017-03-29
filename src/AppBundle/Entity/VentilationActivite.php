<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VentilationActivite
 *
 * @ORM\Table(name="ventilation_activite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VentilationActiviteRepository")
 */
class VentilationActivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /*
     * @OneToOne(targetEntity="Ventilation", inversedBy="ventilationActivite")
     * @JoinColumn(name="ventilation", referencedColumnName="id")
     */
    private $ventilation;
    
    /*
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumn(name="activite", referencedColumnName="id")
     */
    private $activite;
    
    /*
     * @ManyToMany(targetEntity="ListeElement")
     * @JoinTable(name="ventilation_activite_liste_element",
     *      joinColumns={@JoinColumn(name="ventilation_activite", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="liste_element", referencedColumnName="id", unique=true)}
     *      )
     */
    private $listeElement;
    
    
    /* Constructeur */
    function __construct() {
        $this->listeElement = new \Doctrine\Common\Collections\ArrayCollection();
    }

        /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    function getVentilation() {
        return $this->ventilation;
    }

    function getActivite() {
        return $this->activite;
    }

    function getListeElement() {
        return $this->listeElement;
    }

    function setVentilation($ventilation) {
        $this->ventilation = $ventilation;
    }

    function setActivite($activite) {
        $this->activite = $activite;
    }

    function setListeElement($listeElement) {
        $this->listeElement = $listeElement;
    }

}

