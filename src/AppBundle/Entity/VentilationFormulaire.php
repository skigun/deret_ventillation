<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VentilationFormulaire
 *
 * @ORM\Table(name="ventilation_formulaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VentilationFormulaireRepository")
 */
class VentilationFormulaire
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
     * @ORM\OneToOne(targetEntity="Ventilation", inversedBy="ventilationFormulaire")
     * @ORM\JoinColumn(name="ventilation", referencedColumnName="id")
     */
    private $ventilation;

    /*
     * @ORM\ManyToOne(targetEntity="Formulaire")
     * @ORM\JoinColumn(name="formulaire", referencedColumnName="id")
     */
    private $formulaire;

    function getId() {
        return $this->id;
    }

    function getVentilation() {
        return $this->ventilation;
    }

    function getFormulaire() {
        return $this->formulaire;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setVentilation($ventilation) {
        $this->ventilation = $ventilation;
    }

    function setFormulaire($formulaire) {
        $this->formulaire = $formulaire;
    }


}
