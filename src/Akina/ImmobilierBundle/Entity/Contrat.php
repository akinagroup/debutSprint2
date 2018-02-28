<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="DateDeDebut", type="string")
     */
    private $dateDeDebut;

    

    /**
     * @var int
     *
     * @ORM\Column(name="Caution", type="integer")
     */
    private $caution;

    /**
     * @var int
     *
     * @ORM\Column(name="Mensualite", type="integer")
     */
    private $mensualite;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\TermeContrat")
     */
    private $Terme;

    /**
     * @ORM\OneToOne(targetEntity="Akina\ImmobilierBundle\Entity\Reservation")
     */
    private $Reservation;
    


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
     * Set dateDeDebut
     *
     * @param \DateTime $dateDeDebut
     *
     * @return Contrat
     */
    public function setDateDeDebut($dateDeDebut)
    {
        $this->dateDeDebut = $dateDeDebut;

        return $this;
    }

    /**
     * Get dateDeDebut
     *
     * @return \DateTime
     */
    public function getDateDeDebut()
    {
        return $this->dateDeDebut;
    }

    
    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set mensualite
     *
     * @param integer $mensualite
     *
     * @return Contrat
     */
    public function setMensualite($mensualite)
    {
        $this->mensualite = $mensualite;

        return $this;
    }

    /**
     * Get mensualite
     *
     * @return int
     */
    public function getMensualite()
    {
        return $this->mensualite;
    }


    /**
     * Set reservation
     *
     * @param \Akina\ImmobilierBundle\Entity\Reservation $reservation
     *
     * @return Contrat
     */
    public function setReservation(\Akina\ImmobilierBundle\Entity\Reservation $reservation = null)
    {
        $this->Reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Akina\ImmobilierBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
    public function __toString(){
        return $this->mensualite ;
            }

    /**
     * Set terme
     *
     * @param \Akina\ImmobilierBundle\Entity\TermeContrat $terme
     *
     * @return Contrat
     */
    public function setTerme(\Akina\ImmobilierBundle\Entity\TermeContrat $terme = null)
    {
        $this->Terme = $terme;

        return $this;
    }

    /**
     * Get terme
     *
     * @return \Akina\ImmobilierBundle\Entity\TermeContrat
     */
    public function getTerme()
    {
        return $this->Terme;
    }
}
