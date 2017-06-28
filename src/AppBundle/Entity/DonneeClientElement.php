<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonneeClientElement
 *
 * @ORM\Table(name="donnee_client_element")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonneeClientElementRepository")
 */
class DonneeClientElement {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="donneesClientElements")
     * @ORM\JoinColumn(name="element", referencedColumnName="id")
     */
    private $element;

    /**
     * @ORM\ManyToOne(targetEntity="DonneeClient")
     * @ORM\JoinColumn(name="donnee_client", referencedColumnName="id")
     */
    private $donneeClient;

    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="DonneeClientElement", inversedBy="id")
     * @ORM\JoinColumn(name="interaction", referencedColumnName="id", nullable=true)
     */
    private $interaction;


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
     * Set element
     *
     * @param \AppBundle\Entity\Element $element
     *
     * @return DonneeClientElement
     */
    public function setElement(\AppBundle\Entity\Element $element = null)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return \AppBundle\Entity\Element
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set donneeClient
     *
     * @param \AppBundle\Entity\DonneeClient $donneeClient
     *
     * @return DonneeClientElement
     */
    public function setDonneeClient(\AppBundle\Entity\DonneeClient $donneeClient = null)
    {
        $this->donneeClient = $donneeClient;

        return $this;
    }

    /**
     * Get donneeClient
     *
     * @return \AppBundle\Entity\DonneeClient
     */
    public function getDonneeClient()
    {
        return $this->donneeClient;
    }

    

    function __toString()
    {
        return (string)$this->id;
    }



    /**
     * Set interaction
     *
     * @param \AppBundle\Entity\DonneeClientElement $interaction
     *
     * @return DonneeClientElement
     */
    public function setInteraction(\AppBundle\Entity\DonneeClientElement $interaction = null)
    {
        $this->interaction = $interaction;

        return $this;
    }

    /**
     * Get interaction
     *
     * @return \AppBundle\Entity\DonneeClientElement
     */
    public function getInteraction()
    {
        return $this->interaction;
    }
}
