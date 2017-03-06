<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonneeClient
 *
 * @ORM\Table(name="donnee_client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonneeClientRepository")
 */
class DonneeClient
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
     * @ORM\Column(name="libelle", type="string", length=60)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="parametre", type="string", length=255)
     */
    private $parametre;
    /**
     * @ManyToOne(targetEntity="TypeDonneeClient")
     * @JoinColumn(name="id_typeDonneClient", referencedColumnName="id")
     */
    private $typeDonneeClient;
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
     * @return DonneeClient
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
     * Set parametre
     *
     * @param string $parametre
     *
     * @return DonneeClient
     */
    public function setParametre($parametre)
    {
        $this->parametre = $parametre;

        return $this;
    }

    /**
     * Get parametre
     *
     * @return string
     */
    public function getParametre()
    {
        return $this->parametre;
    }
}

